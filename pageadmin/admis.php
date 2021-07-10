<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang quản trị khách hàng</title>
  <script src="../vendor/js/jquery-3.5.1.min.js"></script>
  <script src="admis.js"></script>
  <link rel="stylesheet" href="../vendor/css/bootstrap.css">
  <link rel="stylesheet" href="admis.css">
  <script src="../vendor/js/bootstrap.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
  <link href="https://fonts.google.com/share?selection.family=Raleway:ital,wght@0,300;0,400;1,300;1,400" rel="stylesheet">
</head>

<body>
  <?php
  include 'loadlist.php';
  ?>
  <div class="khachhang">
    <div class="thongtinkhachhang">
      <div class="row labelclient">
        <h2>Danh sách khách hàng</h2>
      </div>
      <div class="row clientinfo">
        <table class="table table-striped text-center">
          <thead>
            <tr>
              <th scope="col">STT</th>
              <th scope="col">Mã KH</th>
              <th scope="col">Khách hàng</th>
              <th scope="col">Thời gian còn lại</th>
              <th scope="col">Chức năng</th>
            </tr>
          </thead>
          <tbody>
            <?php
            for ($row = 0; $row < $countRow; $row++) {
              echo "<tr>";
              echo "<th scope='row'>" . $arrLead[$row][0] . "</th>";
              echo "<td class='idlead'><p>" . $arrLead[$row][1] . "</p></td>";
              echo "<td class='lead'><a href='#' target='_blank'>" . $arrLead[$row][2] . "</a></td>";
              echo "<td>";
                echo '<div class="row row2">';
                  echo '<div class="demnguoc">';
                    echo '<p id="end_datetime" style="display: none;">'.$arrLead[$row][3].'</p>';
                    echo '<p id="days"></p><small>:</small>';
                    echo '<p id="hours"></p><small>:</small>';
                    echo '<p id="minutes"></p><small>:</small>';
                    echo '<p id="seconds"></p>';
                  echo '</div>';
                echo '</div>';
                echo '<div class=" row row3 timename">';
                  echo '<span id="ngay">Ngày</span>';
                  echo '<span id="gio">Giờ</span>';
                  echo '<span id="phut">Phút</span>';
                  echo '<span id="giay">Giây</span>';
                echo '</div>';               
              echo "</td>";
              echo "<td>";
                echo '<div class="btn-toolbar d-flex justify-content-center" role="toolbar"><div class="btn-group mr-2" role="group" aria-label="First group">';
                echo '<button type="button" class="btn btn-success giahan">Gia hạn</button></div>';
                echo '<div class="btn-group mr-2" role="group" aria-label="Second group">';
                echo '<button type="button" class="btn btn-danger ngungsudung">Ngừng sử dụng</button>';
                echo '</div></div>';
              echo "</td>";
              echo "</tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>

</html>