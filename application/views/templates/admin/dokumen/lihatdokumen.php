<div class="container">

    <div class="card">
        <div class="card-body">
            <div class="text-dark mt-8">
                <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Dokumen Detail</b></h5>
            </div>
            <b>
                <hr color="red" />
            </b>
            <p><?php echo $pdfFilePath; ?></p>
            <embed src="<?php echo $pdfFilePath; ?>" type="application/pdf" width="100%" height="800px">
        </div>
    </div>
</div>