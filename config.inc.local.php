<?php
// Generated from env (tests only)
$custom_css = "css/custom.css";
$reset_request_log = "/var/www/config/log";
$audit_log_file = "/var/www/config/log/audit.log";
$background_image = "";
$display_footer = false;
$use_restapi = false;
$use_questions = false;
$notify_on_change = true;
$use_ratelimit = true;
$ratelimit_dbdir = '/tmp';
$max_attempts_per_user = 4;
$max_attempts_per_ip = 4;
$max_attempts_block_seconds = "60";
$client_ip_header = 'REMOTE_ADDR';
$use_sms = false;
$show_menu = false;
$show_help = false;
$use_captcha = true;
$captcha_class = "InternalCaptcha";
$pwd_show_policy = "always";
$pwd_show_policy_pos = "above"; // below/above
$pwd_display_entropy = true;
$pwd_min_length = 10;
$pwd_max_length = 64;
$pwd_min_lower = 3;
$pwd_min_upper = 1;
$pwd_min_digit = 1;
$pwd_min_special = 1;
$pwd_special_chars = "^a-zA-Z0-9";
$pwd_forbidden_chars = "@%";
$use_pwnedpasswords = true;
$pwd_no_reuse = true;
$pwd_diff_last_min_chars = 3;
$pwd_forbidden_words = array("azerty", "qwerty", "password", "admin", "1234");
$pwd_forbidden_ldap_fields = array('cn', 'givenName', 'sn', 'mail', "uid");
$messages['changehelpextramessage'] = "Contactez le secretariat si vous etes perdu";
$default_action = "sendtoken";
$keyphrase = getenv('SSP_KEYPHRASE') ?: 'devsecret';
$debug = (getenv('SSP_DEBUG') === 'true');
$ldap_url = getenv('SSP_LDAP_URL') ?: 'ldap://ldap';
$ldap_starttls = (getenv('SSP_LDAP_STARTTLS') === 'true');
$ldap_binddn = getenv('SSP_LDAP_BINDDN') ?: '';
$ldap_bindpw = getenv('SSP_LDAP_BINDPW') ?: '';
$ldap_base = getenv('SSP_LDAP_BASE') ?: '';
$ldap_login_attribute = getenv('SSP_LDAP_LOGIN_ATTRIBUTE') ?: 'uid';
$ldap_filter = getenv('SSP_LDAP_FILTER') ?: '(&(objectClass=person)(uid={login}))';
$change_password = true;
$who_change_password = getenv('SSP_WHO_CHANGE') ?: 'manager';
$pwd_min_length = intval(getenv('SSP_PWD_MIN_LENGTH') ?: 8);
$use_https = (getenv('SSP_USE_HTTPS') === 'true');
$lang = getenv('SSP_LANG') ?: 'fr';
$use_reset_by_mail = (getenv('SSP_USE_RESET_BY_MAIL') === 'true');
$reset_url         = getenv('SSP_RESET_URL') ?: 'http://localhost';
$token_lifetime    = intval(getenv('SSP_TOKEN_LIFETIME') ?: 900);
$mail_from        = getenv('SSP_MAIL_FROM') ?: 'no-reply@example.com';
$mail_from_name   = getenv('SSP_MAIL_FROM_NAME') ?: 'Password Reset';
$mail_subject     = getenv('SSP_MAIL_SUBJECT') ?: 'Password reset';
$mail_attribute   = getenv('SSP_MAIL_ATTR') ?: 'mail';
$mail_smtp_auth   = (getenv('SSP_SMTP_AUTH') === 'true');
$mail_smtp_host   = getenv('SSP_SMTP_HOST') ?: 'localhost';
$mail_smtp_user   = getenv('SSP_SMTP_USER') ?: '';
$mail_smtp_pass   = getenv('SSP_SMTP_PASS') ?: '';
$mail_smtp_port   = intval(getenv('SSP_SMTP_PORT') ?: 25);
$mail_smtp_secure = getenv('SSP_SMTP_SECURE') ?: 'none';
$mail_smtp_debug  = intval(getenv('SSP_MAIL_SMTP_DEBUG') ?: 0);
if (getenv('SSP_SMTP_ALLOW_SELF_SIGNED') === 'true') {
  $mail_smtp_options = array(
    'ssl' => array(
      'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true
    )
  );
}
?>
