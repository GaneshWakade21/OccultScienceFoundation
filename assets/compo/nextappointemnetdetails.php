<?php 

if(!$_COOKIE['aminloggedin']){
    header("Location: index.php");
  }


?>



<div class="underline flex w-full justify-start px-2 items-center py-1 bg-white text-black text-md font-semibold border border-black">Next Appointment Details</div>
     <div class="flex w-full">
        <div class="w-6/12 border border-black flex flex-col px-2 items-center py-1">
            <div class="h-5/12 w-full text-sm fot-semibold text-gray-500">Appointment Date</div>
            <div class="h-7/12 w-full font-bold text-sm"><?php echo $nextdata['date_of_appointement']; ?></div>
        </div>
        <div class="w-6/12 border border-black flex flex-col px-2 items-center py-1">
            <div class="h-5/12 w-full text-sm fot-semibold text-gray-500">Appointment Time</div>
            <div class="h-7/12 w-full font-bold text-sm"><?php echo $nextdata['time_of_appointement']; ?></div>
        </div>
        
        <!-- <div class="w-4/12 border border-black flex flex-col px-2 items-center py-1">
            <div class="h-5/12 w-full text-sm fot-semibold text-gray-500">Fee charged</div>
            <div class="h-7/12 w-full font-bold text-sm"><?php echo $data['fee_charged']; ?></div>
        </div> -->
     </div>
     <!-- <div class="flex w-full">
        <div class="w-4/12 border border-black flex flex-col px-2 items-center py-1">
            <div class="h-5/12 w-full text-sm fot-semibold text-gray-500">Mode of Payment</div>
            <div class="h-7/12 w-full font-bold text-sm"><?php echo $data['mode_of_payment']; ?></div>
        </div>
        <div class="w-8/12 border border-black flex flex-col px-2 items-center py-1">
            <div class="h-5/12 w-full text-sm fot-semibold text-gray-500">Transaction Details</div>
            <div class="h-7/12 w-full font-bold text-sm"><?php echo $data['transaction_details']; ?></div>
        </div>
     </div> -->
     <div class="flex w-full">
        <!-- <div class="w-full border border-black flex flex-col px-2 items-center py-1">
            <div class="h-5/12 w-full text-sm fot-semibold text-gray-500">Doctor Reamarks</div>
            <div class="h-7/12 w-full font-bold text-sm"><?php echo $data['doctors_concern']; ?></div>
        </div> -->
        
     </div>