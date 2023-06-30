
<div class="container">

    <div class="card">
        <div class="card-body">
            <div class="text-dark mt-8">
                <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Detail Dokumen</b></h5>
            </div>
            <b>
                <hr color="red" />
            </b>
            <embed src="<?php echo base_url('/assets/dokumen/' . $pdfFilePath ); ?>" type="application/pdf" width="100%" height="800px">
        </div>
    </div>
</div>