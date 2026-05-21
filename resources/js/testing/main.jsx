import React from 'react';
import { createRoot } from 'react-dom/client';
import { Theme } from '@radix-ui/themes';
import '@radix-ui/themes/styles.css';
import TestingApp from './TestingApp';

const root = document.getElementById('testing-root');
createRoot(root).render(
    <Theme appearance="light" accentColor="blue" radius="medium">
        <TestingApp />
    </Theme>
);
