<html>
<head>
  <title>��������� �������� �����</title>
</head>
<body>
<?php
  /* if($_FILES["filename"]["size"] > 1024*3*1024)
   {
     echo ("������ ����� ��������� ��� ���������");
     exit;
   }*/
   // ��������� �������� �� ����
   if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
   {
     // ���� ���� �������� �������, ���������� ���
     // �� ��������� ���������� � ��������
     move_uploaded_file($_FILES["filename"]["tmp_name"], "Upload/".$_FILES["filename"]["name"]);
     echo "���� ��������";
   } else {
      echo("������ �������� �����");
   }
?>
</body>
</html>