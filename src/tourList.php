<?php
    if (isset($_POST['email']))
    $conn = mysqli_connect('localhost', 'root', '', 'db_travel');

    $sql = "SELECT * FROM tour_booking WHERE  book_id ='1'";
    $result = mysqli_query($conn, $sql);
    if($result == true){
        if(mysqli_num_rows($result)){
            $row_current = mysqli_fetch_assoc($result);
            echo '<pre>';
            echo print_r($row_current);
            echo '</pre>';
        }
    }
?>
<?php
            if ( isset ( $_SESSION['book'] ) ) {
                echo $_SESSION['book'];
            } else {
                echo $_SESSION['book'];
            }
        ?>
<div id="mda-guest-b" class="">
    <div class="container">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="name">HỌ TÊN *: <span id="bookNameError" class="error"></span></label>
                <input type="text" name="txtName" id="id" class="form-control input-tracking1" value="<?php echo $row_current['id']; ?> ">
            </div>
            <div class="form-group col-md-4">
                <label for="name">HỌ TÊN *: <span id="bookNameError" class="error"></span></label>
                <input type="text" name="txtName" id="name" class="form-control input-tracking1" value="<?php echo $row_current['book_fullName']; ?> ">
            </div>
            <div class="form-group col-md-4">
                <label for="email">Email*:<span id="bookEmailError" class="error"></span></label>
                <input type="text" name="txtEmail" id="email" class="user-email form-control ">
            </div>
            <div class="form-group col-md-4">
                <label for="phone">Số điện thoại *:<span id="bookPhoneError" class="error"></span></label>
                <input type="text" name="txtPhone" id="phone" class="form-control numeric  ">
            </div>

            <div class="form-group col-md-4">
                <label for="address">Địa chỉ *:</label>
                <textarea type="text" name="txtAddress" id="address" class="form-control text_area"></textarea>
            </div>
            <div class="form-group col-md-8">
                <label for="note">Ghi chú:</label>
                <textarea name="txtNote" class="form-control text_area" id="note"></textarea>
            </div>

            <div class="form-group col-md-4">
                <label for="l">Số lượng người: </label>
                <input type="number" name="txtNumber" class="form-control " value="1" min="1" max="20">
            </div>
            <div class="form-group col-md-4">
                <label for="slphongdon">Số lượng phòng đơn </label>
                <input type="number" name="txtRoom" id="slphongdon" class="form-control" min="0" value="0">
            </div>
            <div class="form-group col-md-12">
                <input type="hidden" id="sumary-hidden" value="3499000">
                <div class="txtTotal">Tổng giá trị : <span id="sumary">3,499,000</span> <span>đ</span></div>
            </div>
            <div class="text-center" style="margin-top: 10px">
                <input class="btn-primary btn" type="submit" name="btnSuccess" value="HOÀN THÀNH">
            </div>
        </div>
    </div>
</div>