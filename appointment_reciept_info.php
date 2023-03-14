<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Reciept</title>
    <link rel="stylesheet"
      href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- component -->
    <link rel="stylesheet"
      href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
      href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
  </head>
<body>


<section class=" py-1 bg-blueGray-50">
      <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
      <div class="w-full flex justify-center itmes-center">
      <h2 class="text-2xl font-extrabold dark:text-white ">Appointment Details</h2>
</div>
<div class="overflow-x-auto relative">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Appointment ID
                </th>
                <th scope="col" class="py-3 px-6">
                    Client Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Booking Time
                </th>
                <!-- <th scope="col" class="py-3 px-6">
                    Profession
                </th> -->
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?php echo $_COOKIE['id']; ?>
                </th>
                <td class="py-4 px-6">
                <?php  echo $_COOKIE['name']; ?>
                </td>
                <td class="py-4 px-6">
                <?php  echo $_COOKIE['appointment'];; ?>
                </td>
                <!-- <td class="py-4 px-6">
                
                </td> -->
            </tr>
            
        </tbody>
    </table>
</div>           <a href="index.php">
                 <div class="flex justify-center w-full my-4">
                 <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Return to Homepage</button>
                 </div>
                     </a>
      </div>
    </section>
    </body>
</html>