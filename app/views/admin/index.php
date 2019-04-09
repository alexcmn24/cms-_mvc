<?php require APPROOT . "/views/admin/inc/admin_header.php"; ?>
<?php require APPROOT . "/views/admin/inc/admin_navbar.php"; ?>
<?php require APPROOT . "/views/admin/inc/admin_sidebar.php"; ?>

<div class="content-wrapper clearfix">
	<?php require APPROOT . $data['sadrzaj']; ?>
</div>

<?php require APPROOT . "/views/admin/inc/admin_footer.php"; ?>

<?php	echo !empty($data['modal_success']) ? $data['modal_success'] : null; ?>