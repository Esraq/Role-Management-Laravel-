<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>হেল্প ডেস্ক </h3>

<div class="container">
  <form action="/action_page.php">
    <label for="fname">একসেবা আইডি</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="fname">নাম</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="fname">বিভাগ</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">জেলা</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="lname"><label for="lname">উপজেলা</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.."></label>

     <label for="lname"><label for="lname">ইউনিয়ন/ওয়ার্ড</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.."></label>


   
   
   <label for="country">দায়িত্বরত ব্যক্তি</label>
    <select id="country" name="country">
      <option value="australia">সারাহ আলম</option>
      <option value="canada">শাহাদাত হোসেন</option>
      <option value="usa">কামাল হোসেন </option>
    </select>

    <label for="subject">সমস্যা </label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
