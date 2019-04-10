<?php

return [
	
	'user-management' => [
		'title' => 'User Management',
		'created_at' => 'Time',
		'fields' => [
		],
	],
	
	'roles' => [
		'title' => 'Roles',
		'created_at' => 'Time',
		'fields' => [
			'title' => 'Title',
		],
	],
	
	'users' => [
		'title' => 'Users',
		'created_at' => 'Time',
		'fields' => [
			'name' => 'Name',
			'email' => 'Email',
			'password' => 'Password',
			'role' => 'Role',
			'remember-token' => 'Remember token',
		],
	],
	
	'teams' => [
		'title' => 'Membership type',
		'created_at' => 'Time',
		'fields' => [
			'name' => 'Name',
		],
	],
	'mtypes' => [
		'title' => 'Member type',
		'created_at' => 'Time',
		'fields' => [
			'name' => 'Name',
		],
	],
	
	'players' => [
		'title' => 'Client',
		'created_at' => 'Time',
		'fields' => [
			'team' => 'Member type',
			'name' => 'First Name',
			'surname' => 'Last Name',
			'expire-date' => 'Expire date',
			'phone' => 'Phone number',
			'address' => 'Address',
			'mailing_address' => 'Mailing address',
		],
	],

	'clients' => [
		'title' => 'Client',
		'created_at' => 'Time',
		'fields' => [
			'mtype' => 'Member type',
			'name' => 'First Name',
			'surname' => 'Last Name',
			'expire-date' => 'Expire date',
			'phone' => 'Phone number',
			'address' => 'Address',
			'mailing_address' => 'Mailing address',
		],
	],
	
	
	'qa_create' => 'Create',
	'qa_save' => 'Save',
	'qa_edit' => 'Edit',
	'qa_view' => 'View',
	'qa_update' => 'Update',
	'qa_list' => 'List',
	'qa_no_entries_in_table' => 'No entries in table',
	'custom_controller_index' => 'Custom controller index.',
	'qa_logout' => 'Logout',
	'qa_add_new' => 'Add new',
	'qa_are_you_sure' => 'Are you sure?',
	'qa_back_to_list' => 'Back to list',
	'qa_dashboard' => 'Dashboard',
	'qa_delete' => 'Delete',
	'quickadmin_title' => 'Client List',
];