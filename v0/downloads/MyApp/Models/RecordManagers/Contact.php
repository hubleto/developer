<?php

namespace HubletoApp\Custom\MyApp\Models\RecordManagers;

use \Illuminate\Database\Eloquent\Relations\BelongsTo;
use \HubletoApp\Community\Settings\Models\RecordManagers\User;

class Contact extends \HubletoMain\Core\RecordManager
{

  public $table = 'my_app_contacts';

  public function OWNER(): BelongsTo {
    return $this->belongsTo(User::class, 'id_user', 'id');
  }

}
