<?php
header("Content-Type:text/html; charset=big5");
	printf("�ϺЪŶ��G%s bytes<br />�Ѿl�Ŷ��G%s bytes�C", number_format(disk_total_space(".")), number_format(disk_free_space(".")));
?>