<?php
// Heading
$_['heading_title']                = 'Playful Sparkle - Google Tag Manager';
$_['heading_getting_started']      = 'Introducción';
$_['heading_setup']                = 'Configuración de Google Tag Manager';
$_['heading_troubleshot']          = 'Solución de problemas comunes';
$_['heading_faq']                  = 'Preguntas frecuentes';
$_['heading_contact']              = 'Contactar soporte';

// Text
$_['text_extension']                = 'Extensiones';
$_['text_edit']                     = 'Editar Google Tag Manager';
$_['text_success']                  = 'Éxito: ¡Has modificado Google Tag Manager!';
$_['text_group_ad_settings']        = 'Configuraciones de anuncios';
$_['text_group_analytics_settings'] = 'Configuraciones de análisis';
$_['text_group_security_settings']  = 'Configuraciones de seguridad';
$_['text_group_advanced_settings']  = 'Configuraciones avanzadas';
$_['text_getting_started']          = '<p><strong>Resumen:</strong> El Playful Sparkle - Google Tag Manager para OpenCart 3.x te permite gestionar y desplegar fácilmente las etiquetas de marketing en tu tienda OpenCart sin necesidad de conocimientos de programación. Con esta extensión, puedes agilizar tu configuración de seguimiento, lo que permite una mejor analítica y eficiencia en marketing.</p><p><strong>Requisitos:</strong> Asegúrate de tener una cuenta de Google Tag Manager, un ID de Medición válido y que estás utilizando una versión compatible de OpenCart 3.x+, PHP 7.3.</p>';
$_['text_setup']                    = '<p><strong>Configuración de Google Tag Manager:</strong> Inicia sesión en tu <a href="https://tagmanager.google.com" target="_blank" rel="noopener noreferrer">cuenta de Google Tag Manager</a>, crea un nuevo contenedor para tu sitio web si aún no lo has hecho, y recupera tu ID de medición. Luego, ingresa este ID en el campo designado de la configuración de la extensión Playful Sparkle - Google Tag Manager en tu tienda OpenCart.</p>';
$_['text_troubleshot']              = '<ul><li><strong>ID de medición no encontrado:</strong> Verifica que hayas ingresado el ID de medición correcto en la configuración de la extensión. Asegúrate de que no haya espacios extra o caracteres incorrectos.</li><li><strong>Las etiquetas no se activan:</strong> Asegúrate de que tus etiquetas estén correctamente configuradas en Google Tag Manager con los desencadenantes correctos. Puedes utilizar <a href="https://tagassistant.google.com/" target="_blank" rel="noopener noreferrer">Google Tag Assistant</a> para solucionar problemas de activación de etiquetas.</li><li><strong>Problemas de permisos:</strong> Asegúrate de tener los permisos necesarios en tu cuenta de Google Tag Manager para crear y gestionar etiquetas.</li><li><strong>Problemas de compatibilidad:</strong> Asegúrate de que tu versión de OpenCart esté actualizada y verifica que no haya otros módulos instalados que estén en conflicto con la configuración de Google Tag Manager.</li></ul>';
$_['text_faq']                      = '<details><summary>¿Qué hacer si no veo mis etiquetas activándose en Google Tag Manager?</summary>Asegúrate de que el ID de medición sea correcto y verifica que las etiquetas estén publicadas y correctamente configuradas con los desencadenantes adecuados.</details><details><summary>¿Cómo puedo comprobar si la extensión está funcionando?</summary>Utiliza la extensión <a href="https://tagassistant.google.com/" target="_blank" rel="noopener noreferrer">Google Tag Assistant</a> de Chrome o el modo de vista previa en Google Tag Manager para confirmar que tus etiquetas se están activando como se espera.</details><details><summary>¿Es esta extensión compatible con otras extensiones?</summary>Aunque esta extensión es generalmente compatible, se recomienda probarla con otras extensiones instaladas en tu sitio para evitar conflictos. Si encuentras problemas, verifica si existen problemas de compatibilidad conocidos.</details><details><summary>¿Cómo soluciono problemas comunes con las etiquetas?</summary>Consulta la guía de solución de problemas de Google Tag Manager para obtener ayuda con problemas comunes de etiquetas y mejores prácticas para la configuración.</details>';
$_['text_contact']                  = '<p>Para más asistencia, por favor contacta a nuestro equipo de soporte:</p><ul><li><strong>Contacto:</strong> <a href="mailto:%s">%s</a></li><li><strong>Documentación:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Documentación del usuario</a></li></ul>';
$_['text_gcm_info']                 = 'Para utilizar esta función, asegúrese de tener instalado un banner de cookies. Esta extensión establece un estado básico de consentimiento de forma predeterminada, pero el banner de cookies es responsable de actualizar el consentimiento para permitir la recopilación de datos.';

// Tab
$_['tab_general']                   = 'General';
$_['tab_gcm']                       = 'Modo de Consentimiento de Google (GCM)';
$_['tab_help_and_support']          = 'Ayuda y Soporte';

// Entry
$_['entry_status']                  = 'Estado';
$_['entry_gtm_id']                  = 'ID de medición';
$_['entry_gcm_status']              = 'Habilitar GCM';
$_['entry_ad_storage']              = 'Almacenamiento de anuncios';
$_['entry_ad_user_data']            = 'Datos de usuario de anuncios';
$_['entry_ad_personalization']      = 'Personalización de anuncios';
$_['entry_analytics_storage']       = 'Almacenamiento de análisis';
$_['entry_functionality_storage']   = 'Almacenamiento de funcionalidad';
$_['entry_personalization_storage'] = 'Almacenamiento de personalización';
$_['entry_security_storage']        = 'Almacenamiento de seguridad';
$_['entry_wait_for_update']         = 'Esperar actualización';
$_['entry_ads_data_redaction']      = 'Redacción de datos de anuncios';
$_['entry_url_passthrough']         = 'Transparencia de URL';
$_['entry_strict']                  = 'Estricto';
$_['entry_balanced']                = 'Balanceado';
$_['entry_custom']                  = 'Personalizado';
$_['entry_gcm_profiles']            = 'Perfiles GCM';

// Help
$_['help_ad_storage']               = 'Controla si se permite el almacenamiento de datos para fines relacionados con los anuncios, como el seguimiento de clics o conversiones en los anuncios.';
$_['help_ad_user_data']             = 'Determina si se almacenan los datos sobre los usuarios que interactúan con los anuncios, mejorando las capacidades de segmentación de los anuncios.';
$_['help_ad_personalization']       = 'Permite que los anuncios se personalicen según los datos del usuario, proporcionando anuncios más relevantes para los usuarios.';
$_['help_analytics_storage']        = 'Habilita el almacenamiento de datos utilizados para fines de análisis, ayudando a realizar un seguimiento del rendimiento del sitio y el comportamiento del usuario.';
$_['help_functionality_storage']    = 'Permite el almacenamiento de datos para soportar funcionalidades, como preferencias de usuario o características del sitio que mejoran la experiencia del usuario.';
$_['help_personalization_storage']  = 'Controla el almacenamiento de datos para personalizar la experiencia del usuario, como contenido recomendado o configuraciones.';
$_['help_security_storage']         = 'Asegura el almacenamiento de datos relacionados con la seguridad, como para la prevención de fraudes y el control de acceso seguro.';
$_['help_wait_for_update']          = 'Establece el tiempo (en milisegundos) para retrasar la actualización del estado de consentimiento, asegurando que se apliquen todos los ajustes.';
$_['help_ads_data_redaction']       = 'Redacta los datos del usuario relacionados con los anuncios, asegurando la privacidad al ocultar cierta información identificable.';
$_['help_url_passthrough']          = 'Permite que la URL pase por los controles de consentimiento, útil para rastrear caminos específicos de los usuarios sin almacenar datos personales.';
$_['help_gcm_status']               = 'Habilita el Modo de Consentimiento de Google, permitiendo que tu sitio ajuste el comportamiento de las etiquetas de Google según los ajustes de consentimiento del usuario. Este modo proporciona un seguimiento respetuoso con la privacidad, permitiendo que los análisis y anuncios funcionen en conformidad con las preferencias de consentimiento.';
$_['help_gtm_id_locate']            = 'Para encontrar tu Measurement ID para tu <a href="https://tagmanager.google.com" target="_blank" rel="external noopener noreferrer">cuenta de Google Tag Manager</a>, busca el ID en la parte superior del panel de trabajo, comenzando con "GTM-" seguido de una serie única de letras y números, como "GTM-XXXXXXXX". <a href="https://support.google.com/analytics/answer/12270356?hl=es" target="_blank" rel="external noopener noreferrer">Instrucciones más detalladas aquí</a>.';

// Error
$_['error_permission']              = 'Advertencia: ¡No tienes permiso para modificar la configuración de Google Tag Manager!';
$_['error_gtm_id']                  = 'El campo ID de GTM es obligatorio. Por favor, ingresa tu ID de medición.';
$_['error_gtm_id_invalid']          = 'El formato del ID de GTM es incorrecto. Asegúrate de que siga el formato GTM-XXXXXXXX.';
$_['error_wait_for_update']         = 'El valor de esperar para actualización debe ser un número entre 0 y 10000 milisegundos.';
