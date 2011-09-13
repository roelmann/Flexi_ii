 <?php if (isloggedin()) {
    echo html_writer::start_tag('div', array('id'=>'profileblock'));
    echo html_writer::tag('div', $OUTPUT->user_picture($USER, array('size'=>80)), array('class'=>'user-pic'));
	echo html_writer::start_tag('div', array('id'=>'pro-opt'));
	echo html_writer::tag('h1', get_string('usergreeting', 'theme_flexi_ii', $USER->firstname));
	echo html_writer::start_tag('p', array('class'=>'pro-log'));
	echo html_writer::link(new moodle_url('/user/profile.php', array('id'=>$USER->id)), get_string('myprofile')).' | ';
	echo html_writer::link(new moodle_url('/login/logout.php', array('sesskey'=>sesskey())), get_string('logout'));
	echo $PAGE->headingmenu;
	echo html_writer::end_tag('p');
	echo html_writer::end_tag('div');
	echo html_writer::end_tag('div');
    } else {
    echo html_writer::start_tag('div', array('id'=>'profileblock'));
	echo html_writer::start_tag('div', array('id'=>'post-log'));
	$loginlink = html_writer::link(new moodle_url('/login/'), get_string('loginhere', 'theme_flexi_ii'));
	echo html_writer::tag('h1', get_string('welcome', 'theme_flexi_ii', $loginlink));
	echo $OUTPUT->lang_menu();
	echo html_writer::end_tag('div');
	echo html_writer::end_tag('div');
} ?>
