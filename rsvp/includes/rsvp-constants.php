<?php
global $wpdb;

define( 'ATTENDEES_TABLE', $wpdb->prefix . 'attendees' );
define( 'ASSOCIATED_ATTENDEES_TABLE', $wpdb->prefix . 'associatedAttendees' );
define( 'QUESTIONS_TABLE', $wpdb->prefix . 'rsvpCustomQuestions' );
define( 'QUESTION_TYPE_TABLE', $wpdb->prefix . 'rsvpQuestionTypes' );
define( 'ATTENDEE_ANSWERS', $wpdb->prefix . 'attendeeAnswers' );
define( 'QUESTION_ANSWERS_TABLE', $wpdb->prefix . 'rsvpCustomQuestionAnswers' );
define( 'QUESTION_ATTENDEES_TABLE', $wpdb->prefix . 'rsvpCustomQuestionAttendees' );
define( 'RSVP_FRONTEND_TEXT_CHECK', 'rsvp-pluginhere' );
define( 'OPTION_GREETING', 'rsvp_custom_greeting' );
define( 'OPTION_THANKYOU', 'rsvp_custom_thankyou' );
define( 'OPTION_DEADLINE', 'rsvp_deadline' );
define( 'OPTION_OPENDATE', 'rsvp_opendate' );
define( 'OPTION_YES_VERBIAGE', 'rsvp_yes_verbiage' );
define( 'OPTION_NO_VERBIAGE', 'rsvp_no_verbiage' );
define( 'OPTION_KIDS_MEAL_VERBIAGE', 'rsvp_kids_meal_verbiage' );
define( 'OPTION_VEGGIE_MEAL_VERBIAGE', 'rsvp_veggie_meal_verbiage' );
define( 'OPTION_NOTE_VERBIAGE', 'rsvp_note_verbiage' );
define( 'RSVP_OPTION_HIDE_NOTE', 'rsvp_hide_note_field' );
define( 'OPTION_HIDE_VEGGIE', 'rsvp_hide_veggie' );
define( 'OPTION_HIDE_KIDS_MEAL', 'rsvp_hide_kids_meal' );
define( 'OPTION_HIDE_ADD_ADDITIONAL', 'rsvp_hide_add_additional' );
define( 'OPTION_NOTIFY_ON_RSVP', 'rsvp_notify_when_rsvp' );
define( 'OPTION_NOTIFY_EMAIL', 'rsvp_notify_email_address' );
define( 'OPTION_DEBUG_RSVP_QUERIES', 'rsvp_debug_queries' );
define( 'OPTION_WELCOME_TEXT', 'rsvp_custom_welcome' );
define( 'OPTION_RSVP_QUESTION', 'rsvp_custom_question_text' );
define( 'OPTION_RSVP_CUSTOM_YES_NO', 'rsvp_custom_yes_no' );
define( 'OPTION_RSVP_PASSCODE', 'rsvp_passcode' );
define( 'OPTION_RSVP_OPEN_REGISTRATION', 'rsvp_open_registration' );
define( 'OPTION_RSVP_DONT_USE_HASH', 'rsvp_dont_use_has' );
define( 'OPTION_RSVP_ADD_ADDITIONAL_VERBIAGE', 'rsvp_add_additional_verbiage' );
define( 'OPTION_RSVP_GUEST_EMAIL_CONFIRMATION', 'rsvp_guest_email_confirmation' );
define( 'OPTION_RSVP_NUM_ADDITIONAL_GUESTS', 'rsvp_num_additional_guests' );
define( 'OPTION_RSVP_HIDE_EMAIL_FIELD', 'rsvp_hide_email_field' );
define( 'OPTION_RSVP_DISABLE_CUSTOM_EMAIL_FROM', 'rsvp_disable_custom_from_email' );
define( 'OPTION_RSVP_ONLY_PASSCODE', 'rsvp_only_passcode' );
define( 'OPTION_RSVP_EMAIL_TEXT', 'rsvp_email_text' );
define( 'OPTION_RSVP_DISABLE_USER_SEARCH', 'rsvp_disable_user_search' );
define( 'RSVP_OPTION_DELETE_DATA_ON_UNINSTALL', 'rsvp_delete_data_on_uninstall' );
define( 'RSVP_OPTION_CSS_STYLING', 'rsvp_css_styling' );
define( 'RSVP_DB_VERSION', '12' );
define( 'QT_SHORT', 'shortAnswer' );
define( 'QT_MULTI', 'multipleChoice' );
define( 'QT_LONG', 'longAnswer' );
define( 'QT_DROP', 'dropdown' );
define( 'QT_RADIO', 'radio' );
define( 'RSVP_START_PARA', '<p class="rsvpParagraph">' );
define( 'RSVP_END_PARA', "</p>\r\n" );
define( 'RSVP_START_CONTAINER', "<div id=\"rsvpPlugin\">\r\n" );
define( 'RSVP_END_CONTAINER', "</div>\r\n" );
define( 'RSVP_START_FORM_FIELD', "<div class=\"rsvpFormField\">\r\n" );
define( 'RSVP_END_FORM_FIELD', "</div>\r\n" );
