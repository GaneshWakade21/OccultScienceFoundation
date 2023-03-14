<div class="underline flex w-full justify-start px-2 items-center py-1 bg-white text-black text-md font-semibold border border-black">Previous Details</div>
     <div class="flex w-full">
        <div class="w-6/12 border border-black flex flex-col px-2 items-center py-1">
            <div class="h-5/12 w-full text-sm fot-semibold text-gray-500">Appointment Date</div>
            <div class="h-7/12 w-full font-bold text-sm"><?php echo $previousdata['date_of_appointement']; ?></div>
        </div>
        <div class="w-6/12 border border-black flex flex-col px-2 items-center py-1">
            <div class="h-5/12 w-full text-sm fot-semibold text-gray-500">Appointment Time</div>
            <div class="h-7/12 w-full font-bold text-sm"><?php echo $previousdata['time_of_appointement']; ?></div>
        </div>
     </div>
     <!-- <div class="flex w-full">
        <div class="w-6/12 border border-black flex flex-col px-2 items-center py-1">
            <div class="h-5/12 w-full text-sm fot-semibold text-gray-500">Mode Of Payment</div>
            <div class="h-7/12 w-full font-bold text-sm"><?php echo $previousdata['mode_of_payment']; ?></div>
        </div>
        <div class="w-6/12 border border-black flex flex-col px-2 items-center py-1">
            <div class="h-5/12 w-full text-sm fot-semibold text-gray-500">Fee Charged</div>
            <div class="h-7/12 w-full font-bold text-sm"><?php echo $previousdata['fee_charged']; ?></div>
        </div>
     </div> -->
     <div class="flex w-full">
        <div class="w-full border border-black flex flex-col px-2 items-center py-1">
            <div class="h-5/12 w-full text-sm fot-semibold text-gray-500">Psychologist Remarks</div>
            <div class="h-7/12 w-full font-bold text-sm"><?php echo $previousdata['doctors_concern']; ?></div>
        </div>
        
     </div>