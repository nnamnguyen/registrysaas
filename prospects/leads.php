<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang quản trị khách hàng</title>
  <script src="../vendor//js//jquery-3.5.1.min.js"></script>
  <script src="leads.js"></script>
  <link rel="stylesheet" href="../vendor/css/bootstrap.css">
  <link rel="stylesheet" href="style2.css">
  <script src="../vendor/js/bootstrap.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
  <link href="https://fonts.google.com/share?selection.family=Raleway:ital,wght@0,300;0,400;1,300;1,400"
    rel="stylesheet">
</head>

<body>
  <?php 
  include 'events.php';
  ?>
  <div class="khachhang">
    <div class="thongtinkhachhang">
      <div class="row labelclient">
        <h2>Thông tin khách hàng</h2>
      </div>
      <div class="row clientinfo">
        <div class="col-md-8 sideleft">
          <div class="row infosideleft">
            <div class="col-md-12 fieldclient">
              <div class="row">
                <div class="col-md-3">
                  <p class="text-right labelinfo">Họ tên:</p>
                </div>
                <div class="col-md-9">
                  <p><?php echo $name_lead;?></p>
                </div>
              </div>
            </div>
            <div class="col-md-12 fieldclient">
              <div class="row">
                <div class="col-md-3">
                  <p class="text-right labelinfo">Công ty:</p>
                </div>
                <div class="col-md-9">
                  <p><?php echo $company;?></p>
                </div>
              </div>
            </div>
            <div class="col-md-12 fieldclient">
              <div class="row">
                <div class="col-md-3">
                  <p class="text-right labelinfo">Email:</p>
                </div>
                <div class="col-md-9">
                  <p><?php echo $email;?></p>
                </div>
              </div>
            </div>
            <div class="col-md-12 fieldclient">
              <div class="row">
                <div class="col-md-3">
                  <p class="text-right labelinfo">Điện thoại:</p>
                </div>
                <div class="col-md-9">
                  <p><?php echo $phone;?></p>
                </div>
              </div>
            </div>
            <div class="col-md-12 fieldclient">
              <div class="row">
                <div class="col-md-3">
                  <p class="text-right labelinfo">Tên miền:</p>
                </div>
                <div class="col-md-9">
                  <a id="linktomysite" href='' target="_blank"><?php echo $domain;?></a>
                </div>
              </div>
            </div>
            <div class="col-md-12 fieldclient">
              <div class="row">
                <div class="col-md-3">
                  <p class="text-right labelinfo">Ngày bắt đầu:</p>
                </div>
                <div class="col-md-9">
                  <p id="start_datetime" style="display: none;"><?php echo $start_date;?></p>
                  <p id="start_date">
                    <?php
                      echo date('d-m-Y',strtotime($start_date));
                    ?>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-12 fieldclient">
              <div class="row">
                <div class="col-md-3">
                  <p class="text-right labelinfo">Ngày hết hạn:</p>
                </div>
                <div class="col-md-9">
                  <p id="end_datetime" style="display: none;"><?php echo $end_date;?></p>
                  <p id="end_date">
                    <?php
                      echo date('d-m-Y',strtotime($end_date));
                    ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--end thong tin trai-->
        <div class="col-md-4 sideright">
          <div class="row thoigianconlai">
            <div class="col-md-12">
              <div class="row row1">
                <h2>Thời gian dùng thử</h2>
              </div>
              <div class="row row2">
                <div class="demnguoc">
                  <p id="days"></p><small>:</small>
                  <p id="hours"></p><small>:</small>
                  <p id="minutes"></p><small>:</small>
                  <p id="seconds"></p>
                </div>
                <div class="timename">
                  <span id="ngay">Ngày</span>
                  <span id="gio">Giờ</span>
                  <span id="phut">Phút</span>
                  <span id="giay">Giây</span>
                </div>
              </div>
              <div class="row row3">
                <button type="button" class="btn btn-success giahan">Gia hạn</button>
              </div>
            </div>
          </div>
        </div>
        <!--end countdown phai-->
      </div>
      <div class="row eventclick">
        <div class="col-md-12 text-center">
          <button type="button" class="btn btn-danger ngungsudung">Ngừng sử dụng</button>
        </div>
      </div>
    </div>
  </div>
</body>

</html>