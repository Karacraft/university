#   Auvitornics University
**Developed By**
*By Ali Jibran [ Deputy Manger IT  Auvitronics]*

## Program Invisioned By
*By Syed Abbas ul Hussaini [ CEO Autvitornics ]*

## Purpose
*  Recruitment
*  Knowledge Base Development
*  Training for new Staff
*  Evaluation of Existing Staff
*  Short Listing Agile Candidates


## How to user Roles & Permissions

    dd(auth()->user()->hasRole('admin_all','basic_display'))
    dd(auth()->user()->can('display_user'))
    dd( auth()->user()->givePermissionsTo('display_user') )
    dd( auth()->user()->givePermissionsTo('delete_user') )
    dd(auth()->user()->can('delete_user'))
    dd(auth()->user()->can('display_user'))