<div id="mainPanel">
        {foreach $res as $r}
            <div style="padding: 5px; border: solid 2px #000; margin: 5px; text-align: center;">
                <span>{$r.usuario}</span>
                <span>{$r.nombre}</span>
                <span>{$r.apellido}</span>
                <span>{$r.dni}</span>
                <span>{$r.condicion}</span>
                <span>{$r.fechaIng}</span>
                <span>{$r.activo}</span>
            </div>
         
        {foreachelse}
            ------Sin datos----------------
        {/foreach}
</div>