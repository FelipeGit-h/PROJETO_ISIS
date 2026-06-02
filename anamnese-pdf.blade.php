<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Anamnese - {{ $agendamento->nome }}</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; line-height: 1.6; }
        h1 { color: #6B5B95; border-bottom: 2px solid #6B5B95; padding-bottom: 10px; }
       .section { margin: 20px 0; }
       .label { font-weight: bold; color: #524673; }
       .assinatura { margin-top: 40px; padding: 20px; border: 2px solid #6B5B95; border-radius: 8px; background: #F8F7FC; }
       .termo { margin-top: 30px; font-size: 10px; text-align: justify; }
    </style>
</head>
<body>
    <h1>FICHA DE ANAMNESE - ESPAÇO ISIS</h1>
    
    <div class="section">
        <p><span class="label">Cliente:</span> {{ $agendamento->nome }}</p>
        <p><span class="label">Data:</span> {{ $agendamento->created_at->format('d/m/Y H:i') }}</p>
    </div>

    @if($agendamento->anamnese)
    <div class="section">
        <p><span class="label">Queixa Principal:</span> {{ $agendamento->anamnese->queixa_principal }}</p>
        <p><span class="label">Objetivo:</span> {{ $agendamento->anamnese->objetivo_tratamento }}</p>
        <p><span class="label">Doenças Crônicas:</span> {{ $agendamento->anamnese->doencas_cronicas }}</p>
        <p><span class="label">Alergias:</span> {{ $agendamento->anamnese->alergias }}</p>
        <p><span class="label">Medicamentos:</span> {{ $agendamento->anamnese->medicamentos_uso }}</p>
    </div>

    <div class="assinatura">
        <h3>ASSINATURA DIGITAL</h3>
        <p><span class="label">Assinado por:</span> {{ $agendamento->anamnese->assinatura_digital_nome }}</p>
        <p><span class="label">Data/Hora:</span> {{ $agendamento->anamnese->data_assinatura->format('d/m/Y H:i:s') }}</p>
        <p><span class="label">Documento com validade jurídica conforme MP 2.200-2/2001</span></p>
    </div>

    <div class="termo">
        <h3>TERMO DE CONSENTIMENTO</h3>
        <p>{{ $agendamento->anamnese->termo_consentimento_texto }}</p>
    </div>
    @endif
</body>
</html>