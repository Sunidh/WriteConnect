<?php
include 'partials/header.php';
?>


<section class="form__section">
    <div class="container form__section-container">
        <h2>Add User</h2>
        <div class="alert__message error">
            <p>This is an error message</p>
        </div>
        <form action="" enctype="multipart/form-data">
            <input type="text" placeholder="Firstname">
            <input type="text" placeholder="Lastname">
            <input type="text" placeholder="Username">
            <input type="email" placeholder="Email">
            <input type="password" placeholder="Create Password">
            <input type="password" placeholder="Confirm Password">
            <select>
           <option value="1">Author</option>
           <option value="1">Admin</option>
           
           
            </select>
 
          
<div class="form__control">
            <label for="avatar">Add Avatar</label>
            <input type="file"  id="avatar">
        </div>
            
            <button type="submit" class="btn">Add User</button>
            </form>
    </div>
</section>




