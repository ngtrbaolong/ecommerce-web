<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký Người Dùng</title>
    <!-- boostrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid my-3">
        <h2 class="text-center">Đăng Ký Tài Khoản</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post" 
                enctype="multipart/form-data">
                <!-- username field -->
                <div class="form-outline mb-4">
                    <label for="user_username" 
                    class="form-label">Tên Người Dùng</label>
                    <input type="text" id="user_username" class="form-control"
                    placeholder="Nhập tên của bạn" autocomplete="off"
                    required="required" name="user_username"/>
                </div>
                <!-- email field -->
                <div class="form-outline mb-4">
                    <label for="user_email" 
                    class="form-label">Email</label>
                    <input type="email" id="user_email" class="form-control"
                    placeholder="Nhập email của bạn" autocomplete="off"
                    required="required" name="user_email"/>
                </div>
                <!-- image field -->
                <div class="form-outline mb-4">
                    <label for="user_image" 
                    class="form-label">Ảnh Người Dùng</label>
                    <input type="file" id="user_image" class="form-control"
                    required="required" name="user_image"/>
                </div>
                <!-- password field -->
                <div class="form-outline mb-4">
                    <label for="user_password" 
                    class="form-label">Mật Khẩu</label>
                    <input type="password" id="user_password" class="form-control"
                    placeholder="Nhập mật khẩu của bạn" autocomplete="off"
                    required="required" name="user_password"/>
                </div>
                <!-- confirm password field -->
                <div class="form-outline mb-4">
                    <label for="conf_user_password" 
                    class="form-label">Xác Nhận Lại Mật Khẩu</label>
                    <input type="password" id="conf_user_password" 
                    class="form-control"
                    placeholder="Nhập lại mật khẩu của bạn" autocomplete="off"
                    required="required" name="conf_user_password"/>
                </div>
                <!-- address field -->
                <div class="form-outline mb-4">
                    <label for="user_address" 
                    class="form-label">Địa Chỉ Người Dùng</label>
                    <input type="text" id="user_address" class="form-control"
                    placeholder="Nhập địa chỉ của bạn" autocomplete="off"
                    required="required" name="user_address"/>
                </div>
                <!-- contact field -->
                <div class="form-outline mb-4">
                    <label for="user_contact" 
                    class="form-label">Điện Thoại</label>
                    <input type="text" id="user_contact" class="form-control"
                    placeholder="Nhập số điện thoại" autocomplete="off"
                    required="required" name="user_contact"/>
                </div>
                <div class="mt-4 pt-2">
                    <input type="submit" value="Đăng Ký" 
                    class="bg-info py-2 px-3 border-0" name="user_register">
                    <p class="small fw-bold mt-2 pt-1 mb-0">Đã có tài khoản ? 
                    <a href="user_login.php" class="text-danger"> Đăng Nhập</a></p>
                </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>