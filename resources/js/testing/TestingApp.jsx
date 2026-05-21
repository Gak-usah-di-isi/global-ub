import React, { useState, useEffect } from 'react';
import {
    Box,
    Flex,
    Heading,
    Text,
    Button,
    Card,
    Badge,
    Table,
    Spinner,
    Callout,
    Code,
    Separator,
    Container,
} from '@radix-ui/themes';
import { InfoCircledIcon, CheckCircledIcon, CrossCircledIcon, ReloadIcon } from '@radix-ui/react-icons';

export default function TestingApp() {
    const [data, setData] = useState(null);
    const [loading, setLoading] = useState(false);
    const [error, setError] = useState(null);
    const [lastFetched, setLastFetched] = useState(null);

    const fetchData = async () => {
        setLoading(true);
        setError(null);
        try {
            const res = await fetch('/api/dummy');
            if (!res.ok) throw new Error(`HTTP ${res.status}`);
            const json = await res.json();
            setData(json);
            setLastFetched(new Date().toLocaleTimeString('id-ID'));
        } catch (err) {
            setError(err.message);
        } finally {
            setLoading(false);
        }
    };

    useEffect(() => {
        fetchData();
    }, []);

    return (
        <Box style={{ minHeight: '100vh', background: 'var(--gray-2)', padding: '32px 0' }}>
            <Container size="3">
                {/* Header */}
                <Card mb="6">
                    <Flex align="center" justify="between" wrap="wrap" gap="3">
                        <Box>
                            <Heading size="6" mb="1">React + Laravel API Testing</Heading>
                            <Text color="gray" size="2">
                                Halaman ini di-serve oleh Laravel Blade, React di-render di sini,
                                data diambil dari <Code>/api/dummy</Code> (Laravel API routes)
                            </Text>
                        </Box>
                        <Button onClick={fetchData} disabled={loading} variant="soft">
                            {loading ? <Spinner /> : <ReloadIcon />}
                            {loading ? 'Fetching...' : 'Refresh'}
                        </Button>
                    </Flex>
                </Card>

                {/* Info cara kerja */}
                <Callout.Root color="blue" mb="5">
                    <Callout.Icon><InfoCircledIcon /></Callout.Icon>
                    <Callout.Text>
                        <strong>Cara kerja (Opsi C):</strong> Laravel serve file React via Blade → React fetch ke <Code>/api/dummy</Code> → Laravel API controller return JSON → React render hasilnya.
                        Semua dalam 1 server, tidak ada domain terpisah.
                    </Callout.Text>
                </Callout.Root>

                {/* Status */}
                <Card mb="5">
                    <Heading size="4" mb="3">Status API</Heading>
                    <Flex gap="4" wrap="wrap">
                        <Flex align="center" gap="2">
                            <Text size="2" color="gray">Endpoint:</Text>
                            <Code size="2">GET /api/dummy</Code>
                        </Flex>
                        <Flex align="center" gap="2">
                            <Text size="2" color="gray">Status:</Text>
                            {loading && <Badge color="orange">Loading...</Badge>}
                            {!loading && error && (
                                <Badge color="red">
                                    <CrossCircledIcon /> Error
                                </Badge>
                            )}
                            {!loading && data && (
                                <Badge color="green">
                                    <CheckCircledIcon /> {data.status}
                                </Badge>
                            )}
                        </Flex>
                        {lastFetched && (
                            <Flex align="center" gap="2">
                                <Text size="2" color="gray">Last fetched:</Text>
                                <Text size="2">{lastFetched}</Text>
                            </Flex>
                        )}
                    </Flex>
                </Card>

                {/* Error */}
                {error && (
                    <Callout.Root color="red" mb="5">
                        <Callout.Icon><CrossCircledIcon /></Callout.Icon>
                        <Callout.Text>Gagal fetch API: {error}</Callout.Text>
                    </Callout.Root>
                )}

                {/* Data Table */}
                {data && (
                    <>
                        <Card mb="5">
                            <Flex align="center" justify="between" mb="3">
                                <Heading size="4">Data dari API</Heading>
                                <Badge variant="soft">{data.meta?.total} items</Badge>
                            </Flex>
                            <Text size="2" color="gray" mb="4">{data.message}</Text>

                            <Table.Root variant="surface">
                                <Table.Header>
                                    <Table.Row>
                                        <Table.ColumnHeaderCell>ID</Table.ColumnHeaderCell>
                                        <Table.ColumnHeaderCell>Nama</Table.ColumnHeaderCell>
                                        <Table.ColumnHeaderCell>Lokasi</Table.ColumnHeaderCell>
                                        <Table.ColumnHeaderCell>Berdiri</Table.ColumnHeaderCell>
                                        <Table.ColumnHeaderCell>Mahasiswa</Table.ColumnHeaderCell>
                                        <Table.ColumnHeaderCell>Ranking</Table.ColumnHeaderCell>
                                        <Table.ColumnHeaderCell>Status</Table.ColumnHeaderCell>
                                    </Table.Row>
                                </Table.Header>
                                <Table.Body>
                                    {data.data.map((item) => (
                                        <Table.Row key={item.id}>
                                            <Table.Cell>
                                                <Badge variant="soft" color="gray">{item.id}</Badge>
                                            </Table.Cell>
                                            <Table.Cell>
                                                <Text weight="medium">{item.name}</Text>
                                            </Table.Cell>
                                            <Table.Cell>
                                                <Text size="2" color="gray">{item.location}</Text>
                                            </Table.Cell>
                                            <Table.Cell>{item.founded}</Table.Cell>
                                            <Table.Cell>{item.student_count.toLocaleString('id-ID')}</Table.Cell>
                                            <Table.Cell>
                                                <Badge color="blue" variant="soft">{item.ranking}</Badge>
                                            </Table.Cell>
                                            <Table.Cell>
                                                <Badge color={item.status === 'active' ? 'green' : 'gray'}>
                                                    {item.status}
                                                </Badge>
                                            </Table.Cell>
                                        </Table.Row>
                                    ))}
                                </Table.Body>
                            </Table.Root>
                        </Card>

                        {/* Raw JSON */}
                        <Card>
                            <Heading size="4" mb="3">Raw JSON Response</Heading>
                            <Separator mb="3" size="4" />
                            <Box
                                style={{
                                    background: 'var(--gray-3)',
                                    borderRadius: 'var(--radius-3)',
                                    padding: '16px',
                                    overflowX: 'auto',
                                }}
                            >
                                <pre style={{ margin: 0, fontSize: '12px', lineHeight: 1.6 }}>
                                    {JSON.stringify(data.meta, null, 2)}
                                </pre>
                            </Box>
                        </Card>
                    </>
                )}
            </Container>
        </Box>
    );
}
