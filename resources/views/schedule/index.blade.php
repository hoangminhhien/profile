<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Quản lý lịch HDV</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
    crossorigin="anonymous" />
  <link rel="stylesheet" href="{{asset('css\style.css')}}">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-8">
        <div class="index">
          <p>Quản lý lịch đi tour</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-8">
        <div class="row">
          <div class="col-sm-8">
            <iframe
              src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Asia%2FHo_Chi_Minh&amp;src=dmkudmlldG5hbWVzZSNob2xpZGF5QGdyb3VwLnYuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%230B8043&amp;showTz=0&amp;showNav=1&amp;showTitle=0&amp;showPrint=0&amp;showDate=1"
              style="border:solid 1px #777" width="100%" height="300em" frameborder="0" scrolling="no">
            </iframe>
          </div>
          <div class="col-sm-4">
            <div id="schedule-note">
              <div id="available">
                <div id="available-icon"></div>
                <div id="available-text">
                  <span>Có thể nhận tour (available)</span>
                </div>
              </div>

              <div id="blocked">
                <div id="blocked-icon"></div>
                <div id="blocked-text">
                  <span>Đã nhận lịch (blocked)</span>
                </div>
              </div>

              <div id="holiday">
                <div id="holiday-icon"></div>
                <div id="holiday-text">
                  <span>Ngày nghỉ (không nhận lịch)</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-8">
        <div class="row">
          <div class="col-sm-8">
            <a href="#" id="btn-open-schedule" class="btn btn-warning font-weight-bold w-100">
              Mở lịch làm việc để nhận tour
            </a>
            <p>Mở những ngày bạn có thể nhận tour để các công ty có thể đặt lịch với bạn</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-8">
        <div class="row">

          <div class="col-12 col-sm-6">
            <div class="row">
              <div class="col-6 col-sm-12 pr-0">
                <a href="#" id="add-schedule-btn" class="btn btn-success w-100 font-weight-bold">
                  + Thêm lịch đi tour
                </a>
              </div>
              <div class="col-6 col-sm-12">
                <span>Khoá (block) ngày bạn đã nhận tour để không bị overbook</span>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6">
            <div class="row">
              <div class="col-6 col-sm-12 pr-0">
                <a href="#" id="add-holiday-btn" class="btn btn-danger w-100 font-weight-bold">+ Thêm ngày nghỉ</a>
              </div>
              <div class="col-6 col-sm-12">
                <span>Đóng lịch các ngày bạn muốn nghỉ ngơi</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-8">
        <ul class="timeline">
          <li>
            <div class="row">
              <div class="col-10 col-sm-4">
                <i>
                  13 tháng 8, 2020 | 9:00 am <br>
                  | <br>
                  14 tháng 8, 2020 | 6:00 pm
                </i>
              </div>
              <div class="col-10 col-sm-6">
                <span>Tour <b>Phú Quốc - PYS Travel</b></span>
                <br>
                <span>Điều hành: <b style="text-decoration: underline">Nguyễn Việt</b></span>
                <br>
                <span>Ghi chú: 30 khách, team building</span>
              </div>
              <div class="col-1 col-sm-1">
                <i class="fas fa-cog"></i>
              </div>
            </div>
          </li>
          <li>
            <div class="row">
              <div class="col-10 col-sm-4">
                <i>
                  20 tháng 8, 2020 | 9:00 am <br>
                  | <br>
                  24 tháng 8, 2020 | 6:00 pm
                </i>
              </div>
              <div class="col-10 col-sm-6">
                <span>Tour <b>Đà Nẵng, Hội An, Quảng Bình - PYS Travel</b></span>
                <br>
                <span>Điều hành: <b style="text-decoration: underline">Nguyễn Việt</b></span>
                <br>
                <span>Ghi chú: 20 khách, hội cựu chiến binh</span>
              </div>
              <div class="col-1 col-sm-1">
                <i class="fas fa-cog"></i>
              </div>
            </div>
          </li>
      </div>
      </ul>
    </div>

    <div class="row">
      <div class="col-sm-8">
        <div class="row">
          <div class="col-12 col-sm-12 text-center">
            <a href="#" id="tour-history" class="btn btn-warning font-weight-bold">Xem lịch sử tour</a>
          </div>
        </div>
      </div>

    </div>
  </div>
  </div>
</body>

</html>