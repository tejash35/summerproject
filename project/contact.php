

<?php
include_once("admin/config.php");
$errname = $erremail = $errmessage = " ";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    if(empty($name) || empty($email) || empty($message) ){
        $errname ="Enter Your Name";
        $erremail = " Enter  Your Address";
        $errmessage = " Enter Your Number ";
    }else{
        $sql = "INSERT INTO  contact(name,email,message) Values('$name','$email','$message')";
    $result= mysqli_query($conn,$sql);
    if($result){
        // echo "data inserted into contact table";
    }else{
        // echo"data not inserted".mysqli_error($conn);
    }
    }
    
}

?>

<section class="text-gray-600 body-font relative " id="contact">
    <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
    <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
        <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.984061765057!2d85.33291681498737!3d27.68688748280048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb199593381065%3A0x832027b222f7d87f!2sHamlet%20Nepal%20Gaming%20Zone!5e0!3m2!1sen!2snp!4v1658858953611!5m2!1sen!2snp"></iframe>       
          <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
        <div class="lg:w-1/2 px-6">
            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
            <p class="mt-1">Baneshwor, Kathmandu, Nepal</p>
        </div>
        <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
            <a class="text-red-500 leading-relaxed">HamletNepalGaming@gmail.com</a>
            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
            <p class="leading-relaxed">9876543212</p>
        </div>
        </div>
    </div>
    <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
        <h2 class="text-gray-900 text-lg mb-1 font-medium title-font text-4xl">Contact Us</h2>
        <p class="leading-relaxed mb-5 text-gray-600">Feel Free To Contact</p>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" >
        <div class="relative mb-4">
        <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
        <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
        </div>
        <div class="relative mb-4">
        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
        <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
        </div>
        <div class="relative mb-4">
        <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
        <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out" required></textarea>
        </div>
        <input type="submit" name="submit" Value="Contact" class="text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg">
    </div>
        </form>
    </div>
</section>