<?php require APPROOT . '/views/inc/admin_header.php'; ?>
<?php require APPROOT . '/views/inc/admin_navbar.php'; ?>
<?php require APPROOT . '/views/inc/admin_sidebar.php'; ?>

<div class="content-wrapper clearfix">
	<?php require APPROOT . $data['sadrzaj']; ?>
</div>

<?php require APPROOT . "/views/inc/admin_footer.php"; ?>