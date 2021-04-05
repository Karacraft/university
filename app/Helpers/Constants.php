<?php

namespace App\Helpers;

class Constants
{
       //  User 
       const ROLE_USER = 1;
       const ROLE_STANDARD_EMPLOYEE = 2;
       const ROLE_ADVANCE_EMPLOYEE = 3;
       const ROLE_HOD = 4 ;
       const ROLE_ADMINISTRATOR = 89;
       const ROLE_OWNER = 99;
   
       //  Action Status
       const ACTION_NONE = 0;
       const ACTION_UNKNOWN = 1;
       const ACTION_CANCELLED = 2;
       const ACTION_ABORTED = 3;
       const ACTION_COMPLETED = 99;
   
       //  Numbers for Access
       const SUPER_ADMIN = 99;
       const CAN_ACCESS_OPS_AND_FINANCE = 1;
       const CAN_ACCESS_OPS_ONLY = 2;
       const CAN_ACCESS_FINANCE_ONLY = 3;
       const CAN_ACCESS_NOTHING = 4;
   
       //  String for access
       const STRING_SUPER_ADMIN = 'SUPER ADMIN';
       const STRING_CAN_ACCESS_OPS_AND_FINANCE = 'CAN ACCESS OPS AND FINANCE';
       const STRING_CAN_ACCESS_OPS_ONLY = 'CAN ACCESS OPS ONLY';
       const STRING_CAN_ACCESS_FINANCE_ONLY = 'CAN ACCESS FINANCE ONLY';
}