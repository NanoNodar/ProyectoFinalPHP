<div id="mainPanel">
    {$headerMessage}
    {* {$id} *}

        {foreach $res as $r}
            <div style="padding: 5px; border: solid 2px #000; margin: 5px; text-align: center;">
                <span>{$r.nombre}</span>
                <span>{$r.precio}</span>
                <span><img src="{$r.url}"></span>
                <a>Ver detalle</a>
            </div>
         
        {foreachelse}
            ------Sin datos----------------
        {/foreach}
</div>