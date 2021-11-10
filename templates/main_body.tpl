<div class="col-4">
    {$headerMessage}
        {foreach $res as $r}
            <div class="producto d-flex justify-content-center" style="padding: 5px; border: solid 2px #000; margin: 5px; text-align: center; background-color: #fff;">
                <div><img src="{$r.url}"></div>    
                <div class="d-flex flex-column" style="padding: 4px;">
                    <div style="padding: 4px;">{$r.nombre}</div>
                    <div style="padding: 4px;">${$r.precio}</div>
                    <div>
                        <button type="button" class="btn btn-secondary" style="width: 150px;" disabled>Ver detalle</button>
                    </div>
                </div>
            </div>
         
        {foreachelse}
            ------Sin datos----------------
        {/foreach}
</div>
</div>