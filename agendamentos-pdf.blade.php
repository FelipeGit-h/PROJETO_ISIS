<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body { font-family: Helvetica, sans-serif; color: #333; font-size: 12px; }
        h1 { color: #6B5B95; font-size: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th { background: #6B5B95; color: white; padding: 8px; text-align: left; font-size: 11px; }
        td { padding: 6px 8px; border-bottom: 1px solid #eee; }
    </style>
</head>
<body>
    <h1>Relatório de Agendamentos - Clínica ISIS</h1>
    <p>Gerado em: {{ date('d/m/Y H:i') }}</p>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Serviço</th>
                <th>Data/Hora</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($agendamentos as $a)
            <tr>
                <td>{{ $a->nome }}</td>
                <td>{{ $a->telefone }}</td>
                <td>{{ $a->servico }}</td>
                <td>{{ \Carbon\Carbon::parse($a->data_hora)->format('d/m/Y H:i') }}</td>
                <td>{{ ucfirst($a->status ?? 'pendente') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>