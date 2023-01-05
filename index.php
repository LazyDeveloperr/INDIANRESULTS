<?php include "db.php";
$pass = sha1("987654");
mysqli_query($con, "insert into admin (email, password) value('sakshi@gmail.com','$pass')");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php include "header.php";?>

    <div class="flex">
    <div class="flex ">
  <div class="overflow-x-auto">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-x-auto">
        <div class="flex justify-between p-3 mb-3">
        <h1 class="flex h-1 font-bold text-3xl  mr-5">All INDIAN results</h1>
        <button type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Insert Result</button>

        </div>
        <table class="min-w-full">
          <thead class="border-b">
            <tr>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                id
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                name
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                contact
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                fathers name
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Email
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Maths
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Sci
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Hindi
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                english
              </th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                name
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                email
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                Cell
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                Cell
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                Cell
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                Cell
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                Cell
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                Cell
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
    </div>
    
</body>
</html>