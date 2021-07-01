<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang đăng ký dùng thử</title>
  <script src="./vendor/js/jquery-3.5.1.min.js"></script>
  <script src="index.js"></script>
  <link rel="stylesheet" href="./vendor/css/bootstrap.css">
  <link rel="stylesheet" href="style.css">
  <script src="./vendor/js/bootstrap.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
</head>

<body>
  <div class="headertop">
    <div class="row">
      <div class="col-md-3 registryleftinfo">
        <div class="registryinfo">
          <img src="./images/logo_white.png" alt="" />
          <h3>Xin chào!!!</h3>
          <p>Đăng ký ngay để được dùng thử 14 ngày!</p>
        </div>
      </div>
      <div class="col-md-9 registryform">
        <div class="row row3">
          <div class="col-md-12 text-center">
            <h2>Đăng ký dùng thử</h2>
          </div>
        </div>
        <div class="row row4">
          <div class="col-md-8 offset-2">
            <form>
              <div class="form-group">
                <label>Họ và tên <span class="start">*</span></label>
                <div class="row">
                  <div class="col-md-12 d-inline-flex">
                    <input type="text" class="form-control" id="name" placeholder="Nhập họ tên">
                    <small>Không được để trống</small>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Công ty <span class="start">*</span></label>
                <div class="row">
                  <div class="col-md-12 d-inline-flex">
                    <input type="text" class="form-control" id="company" placeholder="Nhập tên công ty">
                    <small>Không được để trống</small>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Email <span class="start">*</span></label>
                  <div class="row">
                    <div class="col-md-12 d-inline-flex">
                      <input type="text" class="form-control" id="email" placeholder="Email">
                      <small>Không được để trống</small>
                    </div>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Điện thoại <span class="start">*</span></label>
                  <div class="row">
                    <div class="col-md-12 d-inline-flex">
                      <input type="text" class="form-control" id="phone" placeholder="Nhập số điện thoại">
                      <small>Không được để trống</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Tên miền <span class="start">*</span></label>
                <div class="row">
                  <div class="col-md-12 d-inline-flex">
                    <input type="text" class="form-control" id="domain" placeholder="Nhập tên miền mong muốn">
                    <small>Không được để trống</small>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary float-right dangkydungthu">Đăng ký dùng thử</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</body>

</html>