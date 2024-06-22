<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<data>
    @foreach($registros as $item)
        <item>
            <Nome>{{ $item->Nome }}</Nome>
            <SimboloQuimico>{{ $item->SimboloQuimico }}</SimboloQuimico>
            <NumeroAtomico>{{ $item->NumeroAtomico }}</NumeroAtomico>
            <MassaAtomica>{{ $item->MassaAtomica }}</MassaAtomica>
            <EstadoFisico>{{ $item->EstadoFisico }}</EstadoFisico>
        </item>
    @endforeach
</data>
