<!-- notification_form.php -->

<form method="post" action="<?php echo site_url('notification/save_notification'); ?>">
    <label for="tgl_mulai">Tanggal Mulai:</label>
    <input type="date" name="tgl_mulai" id="tgl_mulai" value="<?php echo $tgl_mulai; ?>" required>
    
    <label for="tgl_selesai">Tanggal Selesai:</label>
    <input type="date" name="tgl_selesai" id="tgl_selesai" value="<?php echo $tgl_selesai; ?>" required>
    
    <?php if ($mode === 'edit'): ?>
        <input type="hidden" name="notification_id" value="<?php echo $notification_id; ?>">
    <?php endif; ?>
    
    <input type="submit" value="<?php echo ($mode === 'edit') ? 'Update' : 'Simpan'; ?>">
</form>