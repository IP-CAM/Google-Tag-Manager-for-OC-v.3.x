<?php
// Heading
$_['heading_title']                 = 'Playful Sparkle - Google Tag Manager';
$_['heading_getting_started']      = 'Getting Started';
$_['heading_setup']                = 'Setting Up Google Tag Manager';
$_['heading_troubleshot']          = 'Common Troubleshooting';
$_['heading_faq']                  = 'FAQ';
$_['heading_contact']              = 'Contact Support';

// Text
$_['text_extension']                = 'Extensions';
$_['text_edit']                     = 'Edit Google Tag Manager';
$_['text_success']                  = 'Success: You have modified Google Tag Manager!';
$_['text_group_ad_settings']        = 'Ad Settings';
$_['text_group_analytics_settings'] = 'Analytics Settings';
$_['text_group_security_settings']  = 'Security Settings';
$_['text_group_advanced_settings']  = 'Advanced Settings';
$_['text_getting_started']          = '<p><strong>Overview:</strong> The Playful Sparkle - Google Tag Manager Extension for OpenCart 4 allows you to easily manage and deploy marketing tags on your OpenCart store without any coding skills. With this extension, you can streamline your tracking setup, enabling better analytics and marketing efficiency.</p><p><strong>Requirements:</strong> Ensure you have a Google Tag Manager account, a valid Google Tag Manager ID, and that you’re using a compatible version of OpenCart.</p>';
$_['text_setup']                    = '<p><strong>Setting Up Google Tag Manager:</strong> Log in to your <a href="https://tagmanager.google.com" target="_blank" rel="noopener noreferrer">Google Tag Manager account</a>, create a new container for your website if you haven’t already, and retrieve your Google Tag Manager ID. Then, enter this ID in the designated field of the Playful Sparkle - Google Tag Manager Extension settings in your OpenCart store.</p>';
$_['text_troubleshot']              = '<ul>
    <li><strong>Google Tag Manager ID Not Found:</strong> Double-check that you’ve entered the correct Google Tag Manager ID in the extension settings. Ensure there are no extra spaces or incorrect characters.</li>
    <li><strong>Tags Not Firing:</strong> Ensure that your tags are properly configured in Google Tag Manager with the correct triggers. You can use the <a href="https://tagassistant.google.com/" target="_blank" rel="noopener noreferrer">Google Tag Assistant</a> to troubleshoot tag firing issues.</li>
    <li><strong>Permissions Issues:</strong> Make sure you have the necessary permissions in your Google Tag Manager account to create and manage tags.</li>
    <li><strong>Compatibility Issues:</strong> Ensure your OpenCart version is up-to-date and verify that no other installed extensions are conflicting with the Google Tag Manager setup.</li>
</ul>';
$_['text_faq']                      = '<details><summary>What if I don’t see my tags firing in Google Tag Manager?</summary>Ensure that your Google Tag Manager ID is correct, and verify that the tags are published and properly configured with the right triggers.</details>
<details><summary>How can I check if the extension is working?</summary>Utilize the <a href="https://tagassistant.google.com/" target="_blank" rel="noopener noreferrer">Google Tag Assistant</a> Chrome extension or the preview mode in Google Tag Manager to confirm that your tags are firing as expected.</details>
<details><summary>Is this extension compatible with other extensions?</summary>While this extension is generally compatible, it is advisable to test it with other extensions installed on your site to avoid conflicts. If you encounter issues, check for known compatibility problems.</details>
<details><summary>How do I troubleshoot common tag issues?</summary>Refer to the Google Tag Manager troubleshooting guide for help with common tag issues and best practices for configuration.</details>';
$_['text_contact']                 = '<p>For further assistance, please reach out to our support team:</p><ul><li><strong>Contact:</strong> <a href="mailto:%s">%s</a></li><li><strong>Documentation:</strong> <a href="https://github.com/playfulsparkle/oc4_google_tag_manager" target="_blank" rel="noopener noreferrer">User Documentation</a></li></ul>';

// Tab
$_['tab_general']                   = 'General';
$_['tab_gcm']                       = 'Google Conset Mode (GCM)';
$_['tab_help_and_support']          = 'Help &amp; Support';

// Entry
$_['entry_status']                  = 'Status';
$_['entry_gtm_id']                  = 'Google Tag Manager ID';
$_['entry_gcm_status']              = 'Enable GCM';
$_['entry_ad_storage']              = 'Ad Storage';
$_['entry_ad_user_data']            = 'Ad User Data';
$_['entry_ad_personalization']      = 'Ad Personalization';
$_['entry_analytics_storage']       = 'Analytics Storage';
$_['entry_functionality_storage']   = 'Functionality Storage';
$_['entry_personalization_storage'] = 'Personalization Storage';
$_['entry_security_storage']        = 'Security Storage';
$_['entry_wait_for_update']         = 'Wait for Update';
$_['entry_ads_data_redaction']      = 'Ads Data Redaction';
$_['entry_url_passthrough']         = 'URL Passthrough';
$_['entry_strict']                  = 'Strict';
$_['entry_balanced']                = 'Balanced';
$_['entry_custom']                  = 'Custom';
$_['entry_gcm_profiles']            = 'GCM Profiles';

// Help
$_['help_ad_storage']               = 'Controls whether data storage is allowed for ad-related purposes, such as tracking ad clicks or conversions.';
$_['help_ad_user_data']             = 'Determines if data about users interacting with ads is stored, enhancing ad targeting capabilities.';
$_['help_ad_personalization']       = 'Allows ads to be personalized based on user data, providing more relevant advertisements to users.';
$_['help_analytics_storage']        = 'Enables storage of data used for analytics purposes, helping to track site performance and user behavior.';
$_['help_functionality_storage']    = 'Allows data storage to support functionality, like user preferences or site features that enhance user experience.';
$_['help_personalization_storage']  = 'Controls storage of data for personalizing the user experience, such as recommended content or settings.';
$_['help_security_storage']         = 'Ensures storage of security-related data, such as for fraud prevention and secure access control.';
$_['help_wait_for_update']          = 'Sets the time (in milliseconds) to delay before updating consent status, ensuring all settings are applied.';
$_['help_ads_data_redaction']       = 'Redacts user data related to ads, ensuring privacy by hiding certain identifiable information.';
$_['help_url_passthrough']          = 'Allows the URL to pass through consent checks, useful for tracking specific user paths without storing personal data.';
$_['help_gcm_status']               = 'Enables Google Consent Mode, allowing your site to adjust Google tags behavior based on user consent settings. This mode provides privacy-friendly tracking, allowing for analytics and ads to function in compliance with consent preferences.';
$_['help_gtm_id_locate']            = 'To find your Google Tag Manager ID, log in to your <a href="https://tagmanager.google.com" target="_blank" rel="external noopener noreferrer">Google Tag Manager account</a>. In the workspace, look for the ID at the top of the dashboard—it starts with "GTM-" followed by a unique series of letters and numbers, such as "GTM-XXXXXXX".';

// Error
$_['error_permission']              = 'Warning: You do not have permission to modify Google Tag Manager settings!';
$_['error_gtm_id']                  = 'The GTM ID field is required. Please enter your Google Tag Manager ID.';
$_['error_gtm_id_invalid']          = 'The GTM ID format is incorrect. Ensure it follows the format GTM-XXXXXXX.';
