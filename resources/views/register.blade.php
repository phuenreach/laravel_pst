<html>
    <header>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    </header>
<body>
<div class="container">
<form action="{{route('add')}}" method="POST">
@csrf
    <div class=" col-md-6 frm-register">
        <h2>Register</h2>
        <div class="row">
            <div class="col-md-6">
                <label>Name</label>
                <input name="name" type="text" class="col-md-12 frm-input">
            </div>
            <div class="col-md-6">
                <label>Gender</label>
                <select name="gender" class="col-md-12 frm-input">
                    <option value='male'>Male</option>
                    <option value='female'>Female</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>Email</label>
                <input name="email" type="email" class="col-md-12 frm-input">
            </div>
            <div class="col-md-6 ">
                <label>Phone Number</label>
                <input name="phone" type="text" class="col-md-12 frm-input">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>Password</label>
                <input name="pass" type="password" class="col-md-12 frm-input">
            </div>
            <div class="col-md-6">
                <label>Comfirm Password</label>
                <input name="comfirm_password" type="password" class="col-md-12 frm-input">
            </div>
        </div>
        
              <button class="btn btn-primary col-md-12 mt-5" type="submit">Register now</button>
            
    </div>

</form>
</div>

</body>


</html>