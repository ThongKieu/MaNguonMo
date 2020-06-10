<?php require_once('Connections/Myconnection.php'); ?>
<?php
$ma_nv = "TCHC003";
if (!function_exists("GetSQLValueString")) {
  function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "")
  {
    if (PHP_VERSION < 6) {
      $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
    }

    // $theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($theValue) : mysqli_escape_string($theValue);

    switch ($theType) {
      case "text":
        $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
        break;
      case "long":
      case "int":
        $theValue = ($theValue != "") ? intval($theValue) : "NULL";
        break;
      case "double":
        $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
        break;
      case "date":
        $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
        break;
      case "defined":
        $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
        break;
    }
    return $theValue;
  }
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf(
    "INSERT INTO tlb_congviec (ma_nhan_vien, ngay_vao_lam, phong_ban_id, cong_viec_id, muc_luong_cb, he_so, phu_cap, so_sld, ngay_cap, noi_cap, tknh, ngan_hang, hoc_van_id, bang_cap_id, ngoai_ngu_id, tin_hoc_id, dan_toc_id, quoc_tich_id, ton_giao_id, tinh_thanh_id) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
    GetSQLValueString($_POST['ma_nhan_vien'], "text"),
    GetSQLValueString($_POST['ngay_vao_lam'], "date"),
    GetSQLValueString($_POST['phong_ban_id'], "text"),
    GetSQLValueString($_POST['cong_viec_id'], "text"),
    GetSQLValueString($_POST['muc_luong_cb'], "text"),
    GetSQLValueString($_POST['he_so'], "text"),
    GetSQLValueString($_POST['phu_cap'], "text"),
    GetSQLValueString($_POST['so_sld'], "text"),
    GetSQLValueString($_POST['ngay_cap'], "date"),
    GetSQLValueString($_POST['noi_cap'], "text"),
    GetSQLValueString($_POST['tknh'], "text"),
    GetSQLValueString($_POST['ngan_hang'], "text"),
    GetSQLValueString($_POST['hoc_van_id'], "text"),
    GetSQLValueString($_POST['bang_cap_id'], "text"),
    GetSQLValueString($_POST['ngoai_ngu_id'], "text"),
    GetSQLValueString($_POST['tin_hoc_id'], "text"),
    GetSQLValueString($_POST['dan_toc_id'], "text"),
    GetSQLValueString($_POST['quoc_tich_id'], "text"),
    GetSQLValueString($_POST['ton_giao_id'], "text"),
    GetSQLValueString($_POST['tinh_thanh_id'], "text")
  );

  mysqli_select_db($Myconnection, $database_Myconnection);
  $Result1 = mysqli_query($Myconnection, $insertSQLd); // or die(mysqli_error();

  $insertGoTo = "danh_sach_nhan_vien.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  sprintf("Location: %s", $insertGoTo);
}
//Lấy nhân viên cần nhập Công việc
mysqli_select_db($Myconnection, $database_Myconnection);
$query_RCcapnhat_nhanvien = "SELECT * FROM tlb_nhanvien where ma_nhan_vien = '$ma_nv'";
$RCcapnhat_nhanvien = mysqli_query($Myconnection, $query_RCcapnhat_nhanviend); // or die(mysqli_error();
$row_RCcapnhat_nhanvien = mysqli_fetch_assoc($RCcapnhat_nhanvien);
$totalRows_RCcapnhat_nhanvien = mysqli_num_rows($RCcapnhat_nhanvien);
//lay danh sach phong ban cap nhat
$query_RCphongban = "SELECT * FROM tlb_phongban";
$RCphongban = mysqli_query($Myconnection, $query_RCphongband); // or die(mysqli_error();
$row_RCphongban = mysqli_fetch_assoc($RCphongban);
$totalRows_RCphongban = mysqli_num_rows($RCphongban);
//lay danh sach cong viec khi cap nhat
$query_RCctcongviec = "SELECT * FROM tlb_ctcongviec";
$RCctcongviec = mysqli_query($Myconnection, $query_RCctcongviecd); // or die(mysqli_error();
$row_RCctcongviec = mysqli_fetch_assoc($RCctcongviec);
$totalRows_RCctcongviec = mysqli_num_rows($RCctcongviec);
//lay danh sach Hoc van
$query_RCHocvan = "SELECT * FROM tlb_hocvan";
$RCHocvan = mysqli_query($Myconnection, $query_RCHocvand); // or die(mysqli_error();
$row_RCHocvan = mysqli_fetch_assoc($RCHocvan);
$totalRows_RCHocvan = mysqli_num_rows($RCHocvan);
// lay danh sach bang cap
$query_RCBangcap = "SELECT * FROM tlb_bangcap";
$RCBangcap = mysqli_query($Myconnection, $query_RCBangcapd); // or die(mysqli_error();
$row_RCBangcap = mysqli_fetch_assoc($RCBangcap);
$totalRows_RCBangcap = mysqli_num_rows($RCBangcap);
//lay danh sach ngoai ngu
$query_RCNgoaingu = "SELECT * FROM tlb_ngoaingu";
$RCNgoaingu = mysqli_query($Myconnection, $query_RCNgoaingud); // or die(mysqli_error();
$row_RCNgoaingu = mysqli_fetch_assoc($RCNgoaingu);
$totalRows_RCNgoaingu = mysqli_num_rows($RCNgoaingu);
//lay danh sach tin hoc
$query_RCTinhoc = "SELECT * FROM tlb_tinhoc";
$RCTinhoc = mysqli_query($Myconnection, $query_RCTinhocd); // or die(mysqli_error();
$row_RCTinhoc = mysqli_fetch_assoc($RCTinhoc);
$totalRows_RCTinhoc = mysqli_num_rows($RCTinhoc);
//lay danh sach dan toc
$query_RCDantoc = "SELECT * FROM tlb_dantoc";
$RCDantoc = mysqli_query($Myconnection, $query_RCDantocd); // or die(mysqli_error();
$row_RCDantoc = mysqli_fetch_assoc($RCDantoc);
$totalRows_RCDantoc = mysqli_num_rows($RCDantoc);
//Lay danh sach quoc tich
$query_RCQuoctich = "SELECT * FROM tlb_quoctich";
$RCQuoctich = mysqli_query($Myconnection, $query_RCQuoctichd); // or die(mysqli_error();
$row_RCQuoctich = mysqli_fetch_assoc($RCQuoctich);
$totalRows_RCQuoctich = mysqli_num_rows($RCQuoctich);
//Lay danh sach ton giao
$query_RCTongiao = "SELECT * FROM tlb_tongiao";
$RCTongiao = mysqli_query($Myconnection, $query_RCTongiaod); // or die(mysqli_error();
$row_RCTongiao = mysqli_fetch_assoc($RCTongiao);
$totalRows_RCTongiao = mysqli_num_rows($RCTongiao);
//Lay danh sach tinh thanh
$query_RCTinhthanh = "SELECT * FROM tlb_tinhthanh";
$RCTinhthanh = mysqli_query($Myconnection, $query_RCTinhthanhd); // or die(mysqli_error();
$row_RCTinhthanh = mysqli_fetch_assoc($RCTinhthanh);
$totalRows_RCTinhthanh = mysqli_num_rows($RCTinhthanh);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Untitled Document</title>
  <style type="text/css">
    <!--
    body,
    td,
    th {
      font-family: Arial, Helvetica, sans-serif;
      font-size: 12px;
      line-height: 1.4;
    }
    -->
  </style>
</head>

<body text="#000000" link="#CC0000" vlink="#0000CC" alink="#000099">
  <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
    <table width="800" align="center" cellpadding="2" cellspacing="2" bgcolor="#66CCFF">
      <tr valign="baseline">
        <td width="102" align="right" nowrap="nowrap">Ma_nhan_vien:</td>
        <td width="219"><input type="text" name="ma_nhan_vien" value="<?php echo $row_RCcapnhat_congviec['tlb_nhanvien.ma_nhan_vien']; ?>" size="32" /></td>
        <td width="110">Tknh:</td>
        <td width="291"><input type="text" name="tknh" value="" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Ngay_vao_lam:</td>
        <td><input type="text" name="ngay_vao_lam" value="" size="32" /></td>
        <td>Ngan_hang:</td>
        <td><input type="text" name="ngan_hang" value="" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Phong_ban_id:</td>
        <td><select name="phong_ban_id">
            <?php
            do {
            ?>
              <option value="<?php echo $row_RCphongban['phong_ban_id'] ?>"><?php echo $row_RCphongban['ten_phong_ban'] ?></option>
            <?php
            } while ($row_RCphongban = mysqli_fetch_assoc($RCphongban));
            ?>
          </select></td>
        <td>Hoc_van_id:</td>
        <td><select name="hoc_van_id">
            <?php
            do {
            ?>
              <option value="<?php echo $row_RCHocvan['hoc_van_id'] ?>"><?php echo $row_RCHocvan['ten_hoc_van'] ?></option>
            <?php
            } while ($row_RCHocvan = mysqli_fetch_assoc($RCHocvan));
            ?>
          </select></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Cong_viec_id:</td>
        <td><select name="cong_viec_id">
            <?php
            do {
            ?>
              <option value="<?php echo $row_RCctcongviec['cong_viec_id'] ?>"><?php echo $row_RCctcongviec['ten_cong_viec'] ?></option>
            <?php
            } while ($row_RCctcongviec = mysqli_fetch_assoc($RCctcongviec));
            ?>
          </select></td>
        <td>Bang_cap_id:</td>
        <td><select name="bang_cap_id">
            <?php
            do {
            ?>
              <option value="<?php echo $row_RCBangcap['bang_cap_id'] ?>"><?php echo $row_RCBangcap['ten_bang_cap'] ?></option>
            <?php
            } while ($row_RCBangcap = mysqli_fetch_assoc($RCBangcap));
            ?>
          </select></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Muc_luong_cb:</td>
        <td><input type="text" name="muc_luong_cb" value="" size="32" /></td>
        <td>Ngoai_ngu_id:</td>
        <td><select name="ngoai_ngu_id">
            <?php
            do {
            ?>
              <option value="<?php echo $row_RCNgoaingu['ngoai_ngu_id'] ?>"><?php echo $row_RCNgoaingu['ten_ngoai_ngu'] ?></option>
            <?php
            } while ($row_RCNgoaingu = mysqli_fetch_assoc($RCNgoaingu));
            ?>
          </select></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">He_so:</td>
        <td><input type="text" name="he_so" value="" size="32" /></td>
        <td>Tin_hoc_id:</td>
        <td><select name="tin_hoc_id">
            <?php
            do {
            ?>
              <option value="<?php echo $row_RCTinhoc['tin_hoc_id'] ?>"><?php echo $row_RCTinhoc['ten_tin_hoc'] ?></option>
            <?php
            } while ($row_RCTinhoc = mysqli_fetch_assoc($RCTinhoc));
            ?>
          </select></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Phu_cap:</td>
        <td><input type="text" name="phu_cap" value="" size="32" /></td>
        <td>Dan_toc_id:</td>
        <td><select name="dan_toc_id">
            <?php
            do {
            ?>
              <option value="<?php echo $row_RCDantoc['dan_toc_id'] ?>"><?php echo $row_RCDantoc['ten_dan_toc'] ?></option>
            <?php
            } while ($row_RCDantoc = mysqli_fetch_assoc($RCDantoc));
            ?>
          </select></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">So_sld:</td>
        <td><input type="text" name="so_sld" value="" size="32" /></td>
        <td>Quoc_tich_id:</td>
        <td><select name="quoc_tich_id">
            <?php
            do {
            ?>
              <option value="<?php echo $row_RCQuoctich['quoc_tich_id'] ?>"><?php echo $row_RCQuoctich['ten_quoc_tich'] ?></option>
            <?php
            } while ($row_RCQuoctich = mysqli_fetch_assoc($RCQuoctich));
            ?>
          </select></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Ngay_cap:</td>
        <td><input type="text" name="ngay_cap" value="" size="32" /></td>
        <td>Ton_giao_id:</td>
        <td><select name="ton_giao_id">
            <?php
            do {
            ?>
              <option value="<?php echo $row_RCTongiao['ton_giao_id'] ?>"><?php echo $row_RCTongiao['ten_ton_giao'] ?></option>
            <?php
            } while ($row_RCTongiao = mysqli_fetch_assoc($RCTongiao));
            ?>
          </select></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Noi_cap:</td>
        <td><input type="text" name="noi_cap" value="" size="32" /></td>
        <td>Tinh_thanh_id:</td>
        <td><select name="tinh_thanh_id">
            <?php
            do {
            ?>
              <option value="<?php echo $row_RCTinhthanh['tinh_thanh_id'] ?>"><?php echo $row_RCTinhthanh['ten_tinh_thanh'] ?></option>
            <?php
            } while ($row_RCTinhthanh = mysqli_fetch_assoc($RCTinhthanh));
            ?>
          </select></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr valign="baseline">
        <td colspan="4" align="center" nowrap="nowrap"><input type="submit" value=":|: Đồng ý :|:" /></td>
      </tr>
    </table>
    <input type="hidden" name="MM_update" value="form1" />
    <input type="hidden" name="ma_nhan_vien" value="<?php echo $row_RCcapnhat_congviec['ma_nhan_vien']; ?>" />
  </form>
  <p>&nbsp;</p>
</body>

</html>
<?php
mysqli_free_result($RCphongban);
?>