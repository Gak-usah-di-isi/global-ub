<script>
    document.addEventListener("DOMContentLoaded", () => {
        const sidebar = document.getElementById("sidebar");
        const toggleBtn = document.getElementById("sidebarToggle");
        const arrowIcon = document.getElementById("arrowIcon");
        const logo = document.querySelector(".nav-logo");
        const logoWrapper = document.querySelector(".logo-wrapper");

        const popover = document.getElementById("actionPopover");
        let lastActionTrigger = null;

        const deleteModal = document.getElementById("deleteModal");
        const deleteModalOverlay =
            document.getElementById("deleteModalOverlay");
        const deleteModalClose = document.getElementById("deleteModalClose");
        const btnCancelDelete = document.getElementById("btnCancelDelete");
        const btnConfirmDelete = document.getElementById("btnConfirmDelete");
        let lastFocusedBeforeModal = null;

        const hamburger = document.getElementById("btnHamburger");
        const closeMobile = document.getElementById("btnCloseMobileSidebar");
        const mobileOverlay = document.getElementById("mobileSidebarOverlay");

        function showPopover(btn) {
            if (!popover) return;

            const r = btn.getBoundingClientRect();
            const popRect = {
                w: 200,
                h: 140
            };
            let top = window.scrollY + r.bottom + 8;
            let left = window.scrollX + r.right - popRect.w;
            if (left + popRect.w > window.scrollX + window.innerWidth - 8) {
                left = window.scrollX + window.innerWidth - popRect.w - 8;
            }
            if (top + popRect.h > window.scrollY + window.innerHeight - 8) {
                top = window.scrollY + r.top - popRect.h - 8;
            }
            popover.style.top = top + "px";
            popover.style.left = left + "px";
            popover.classList.remove("hidden");
            btn.setAttribute("aria-expanded", "true");
            popover.dataset.triggerId = btn.dataset.popId;
            lastActionTrigger = btn;
        }

        function hidePopover() {
            if (!popover || popover.classList.contains("hidden")) return;
            document
                .querySelectorAll('.action-trigger[aria-expanded="true"]')
                .forEach((b) => b.setAttribute("aria-expanded", "false"));
            popover.classList.add("hidden");
            delete popover.dataset.triggerId;
        }

        let idCounter = 0;
        document.querySelectorAll(".action-trigger").forEach((btn) => {
            btn.dataset.popId = "act-" + ++idCounter;
            btn.addEventListener("click", (e) => {
                e.stopPropagation();
                if (popover.dataset.triggerId === btn.dataset.popId) {
                    hidePopover();
                } else {
                    showPopover(btn);
                }
            });
        });

        document.addEventListener("click", (e) => {
            if (popover && !popover.contains(e.target)) hidePopover();
        });

        document.addEventListener("keydown", (e) => {
            if (e.key === "Escape") {
                if (deleteModal && !deleteModal.classList.contains("hidden")) {
                    closeDeleteModal();
                } else {
                    hidePopover();
                    closeMobileSidebar();
                }
            }
        });

        function openDeleteModal(productId) {
            if (!deleteModal) return;

            lastFocusedBeforeModal = document.activeElement;
            deleteModal.classList.remove("hidden");
            document.body.classList.add("overflow-hidden");
            if (btnConfirmDelete) {
                btnConfirmDelete.dataset.productId = productId || "";
            }
            if (btnCancelDelete) {
                btnCancelDelete.focus();
            }
        }

        function closeDeleteModal() {
            if (!deleteModal) return;

            deleteModal.classList.add("hidden");
            document.body.classList.remove("overflow-hidden");
            if (lastFocusedBeforeModal) lastFocusedBeforeModal.focus();
        }

        deleteModalOverlay?.addEventListener("click", closeDeleteModal);
        deleteModalClose?.addEventListener("click", closeDeleteModal);
        btnCancelDelete?.addEventListener("click", closeDeleteModal);
        btnConfirmDelete?.addEventListener("click", () => {
            const id = btnConfirmDelete.dataset.productId;
            console.log("Hapus produk id:", id);
            closeDeleteModal();
        });

        deleteModal?.addEventListener("keydown", (e) => {
            if (e.key !== "Tab") return;
            const focusables = deleteModal.querySelectorAll(
                'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'
            );
            if (!focusables.length) return;
            const first = focusables[0];
            const last = focusables[focusables.length - 1];
            if (e.shiftKey && document.activeElement === first) {
                e.preventDefault();
                last.focus();
            } else if (!e.shiftKey && document.activeElement === last) {
                e.preventDefault();
                first.focus();
            }
        });

        // Only add popover event listeners if popover exists
        if (popover) {
            const actionDelete = popover.querySelector(".action-delete");
            const actionEdit = popover.querySelector(".action-edit");

            actionDelete?.addEventListener("click", () => {
                const productName =
                    lastActionTrigger
                    ?.closest("tr")
                    ?.querySelector(".font-medium")
                    ?.textContent?.trim() || "";
                hidePopover();
                openDeleteModal(productName);
            });

            actionEdit?.addEventListener("click", () => {
                hidePopover();
                console.log("Edit produk");
            });
        }

        toggleBtn?.addEventListener("click", () => {
            if (window.innerWidth < 768) return;

            if (!sidebar || !arrowIcon) return;

            const collapsed = sidebar.classList.toggle("collapsed");

            if (collapsed) {
                sidebar.classList.replace("w-[275px]", "w-[88px]");
                arrowIcon.classList.add("rotate-180");
                if (logo && logo.classList.contains("w-[160px]")) {
                    logo.classList.replace("w-[160px]", "w-[40px]");
                }
                if (logoWrapper) {
                    logoWrapper.classList.add("mt-4");
                }
            } else {
                sidebar.classList.replace("w-[88px]", "w-[275px]");
                arrowIcon.classList.remove("rotate-180");
                if (logo && logo.classList.contains("w-[40px]")) {
                    logo.classList.replace("w-[40px]", "w-[160px]");
                }
                if (logoWrapper) {
                    logoWrapper.classList.remove("mt-4");
                }
            }
        });

        function openMobileSidebar() {
            if (sidebar) sidebar.classList.add("mobile-open");
            if (mobileOverlay) mobileOverlay.classList.add("show");
            document.body.classList.add("overflow-hidden");
        }

        function closeMobileSidebar() {
            if (sidebar) sidebar.classList.remove("mobile-open");
            if (mobileOverlay) mobileOverlay.classList.remove("show");
            document.body.classList.remove("overflow-hidden");
        }
        hamburger?.addEventListener("click", () => {
            if (sidebar.classList.contains("mobile-open")) {
                closeMobileSidebar();
            } else {
                openMobileSidebar();
            }
        });
        closeMobile?.addEventListener("click", closeMobileSidebar);
        mobileOverlay?.addEventListener("click", closeMobileSidebar);
        window.addEventListener("resize", () => {
            if (window.innerWidth >= 768) {
                closeMobileSidebar();
            }
        });

        // Profile Dropdown functionality
        const profileButton = document.getElementById("profile-button");
        const profileDropdown = document.getElementById("profile-dropdown");
        let isDropdownOpen = false;

        profileButton?.addEventListener("click", function(e) {
            e.stopPropagation();
            toggleDropdown();
        });

        document.addEventListener("click", function(e) {
            if (
                profileButton &&
                profileDropdown &&
                !profileButton.contains(e.target) &&
                !profileDropdown.contains(e.target)
            ) {
                closeDropdown();
            }
        });

        document.addEventListener("keydown", function(e) {
            if (e.key === "Escape") {
                closeDropdown();
            }
        });

        function toggleDropdown() {
            if (isDropdownOpen) {
                closeDropdown();
            } else {
                openDropdown();
            }
        }

        function openDropdown() {
            if (profileDropdown) {
                profileDropdown.classList.remove("opacity-0", "invisible", "scale-95");
                profileDropdown.classList.add("opacity-100", "visible", "scale-100");
                isDropdownOpen = true;
            }
        }

        function closeDropdown() {
            if (profileDropdown) {
                profileDropdown.classList.remove("opacity-100", "visible", "scale-100");
                profileDropdown.classList.add("opacity-0", "invisible", "scale-95");
                isDropdownOpen = false;
            }
        }
    });
</script>
