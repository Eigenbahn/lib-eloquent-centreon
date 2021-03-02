<?php

namespace App\Model\Eloquent\centreon;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Eloquent\centreon\Contact
 *
 * @property int $contact_id
 * @property int $timeperiod_tp_id
 * @property int $timeperiod_tp_id2
 * @property string $contact_name
 * @property string $contact_alias
 * @property string $contact_passwd
 * @property string $contact_lang
 * @property string $contact_host_notification_options
 * @property string $contact_service_notification_options
 * @property string $contact_email
 * @property string $contact_pager
 * @property string $contact_address1
 * @property string $contact_address2
 * @property string $contact_address3
 * @property string $contact_address4
 * @property string $contact_address5
 * @property string $contact_address6
 * @property string $contact_comment
 * @property string $contact_js_effects
 * @property int $contact_location
 * @property string $contact_oreon
 * @property string $contact_enable_notifications
 * @property int $contact_template_id
 * @property string $contact_admin
 * @property string $contact_type_msg
 * @property string $contact_activate
 * @property string $contact_auth_type
 * @property string $contact_ldap_dn
 * @property int $ar_id
 * @property string $contact_acl_group_list
 * @property string $contact_autologin_key
 * @property string $contact_charset
 * @property bool $contact_register
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Contact whereArId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Contact whereContactAclGroupList($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Contact whereContactActivate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Contact whereContactAddress1($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Contact whereContactAddress2($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Contact whereContactAddress3($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Contact whereContactAddress4($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Contact whereContactAddress5($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Contact whereContactAddress6($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Contact whereContactAdmin($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Contact whereContactAlias($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Contact whereContactAuthType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Contact whereContactAutologinKey($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Contact whereContactCharset($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Contact whereContactComment($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Contact whereContactEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Contact whereContactEnableNotifications($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Contact whereContactHostNotificationOptions($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Contact whereContactId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Contact whereContactJsEffects($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Contact whereContactLang($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Contact whereContactLdapDn($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Contact whereContactLocation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Contact whereContactName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Contact whereContactOreon($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Contact whereContactPager($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Contact whereContactPasswd($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Contact whereContactRegister($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Contact whereContactServiceNotificationOptions($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Contact whereContactTemplateId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Contact whereContactTypeMsg($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Contact whereTimeperiodTpId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Contact whereTimeperiodTpId2($value)
 * @mixin \Eloquent
 * @property int|null $reach_api
 * @property int|null $reach_api_rt
 * @property int|null $default_page
 * @property int $contact_ldap_last_sync
 * @property string $contact_ldap_required_sync
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact query()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereContactLdapLastSync($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereContactLdapRequiredSync($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereDefaultPage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereReachApi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereReachApiRt($value)
 */
class Contact extends Model {
    protected $connection = 'centreon';
    protected $table = 'contact';

    public $timestamps = false;
    protected $primaryKey = 'contact_id';
    protected $guarded = ['contact_id'];
}