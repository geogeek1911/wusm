<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_announcement',
		'title' => 'Announcement',
		'fields' => array (
			array (
				'key' => 'field_5273e0d6627ef',
				'label' => 'URL',
				'name' => 'url',
				'type' => 'website',
				'website_title' => 0,
				'internal_link' => 1,
				'output_format' => 1,
				'default_value' => '',
			),
			array (
				'key' => 'field_5273d8df144ef',
				'label' => 'Internal only',
				'name' => 'internal_only',
				'type' => 'checkbox',
				'choices' => array (
					1 => 'Internal Only',
				),
				'default_value' => '',
				'layout' => 'vertical',
			),
			array (
				'key' => 'field_5274121ad05c0',
				'label' => 'Expiration Date',
				'name' => 'expiration_date',
				'type' => 'date_time_picker',
				'show_date' => 'true',
				'date_format' => 'yy-mm-dd',
				'time_format' => 'HH:mm',
				'show_week_number' => 'false',
				'picker' => 'slider',
				'save_as_timestamp' => 'false',
				'get_as_timestamp' => 'false',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'announcement',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_billboard',
		'title' => 'Billboard',
		'fields' => array (
			array (
				'key' => 'field_51d18a2f0e95c',
				'label' => 'Link',
				'name' => 'link',
				'type' => 'website',
				'website_title' => 0,
				'internal_link' => 1,
				'output_format' => 1,
				'default_value' => '',
			),
			array (
				'key' => 'field_526ae41c37a73',
				'label' => 'Internal Only',
				'name' => 'internal_only',
				'type' => 'checkbox',
				'choices' => array (
					1 => 'Internal Only',
				),
				'default_value' => '',
				'layout' => 'vertical',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'billboard',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_faculty-profiles',
		'title' => 'Faculty Profiles',
		'fields' => array (
			array (
				'key' => 'field_5214cff265257',
				'label' => 'More Info',
				'name' => 'more_info',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_5214d00065258',
						'label' => 'Link Text',
						'name' => 'link_text',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_5214d01065259',
						'label' => 'Link URL',
						'name' => 'link_url',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'row',
				'button_label' => 'Add Row',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'faculty_profile',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_giving-page-extras',
		'title' => 'Giving page extras',
		'fields' => array (
			array (
				'key' => 'field_52e7d38a0f064',
				'label' => 'Header text',
				'name' => 'header_text',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'no',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'giving-page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_in-the-news',
		'title' => 'In the News',
		'fields' => array (
			array (
				'key' => 'field_51cdd8cc70d6c',
				'label' => 'Thumbnail',
				'name' => 'thumbnail',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'in-the-news',
				'library' => 'all',
			),
			array (
				'key' => 'field_5273cfea28929',
				'label' => 'URL',
				'name' => 'url',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5273ce6644829',
				'label' => 'Source',
				'name' => 'source',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'media_mentions',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_locations',
		'title' => 'Locations',
		'fields' => array (
			array (
				'key' => 'field_52cf1d4ad4dbf',
				'label' => 'Location image',
				'name' => 'location_image',
				'type' => 'image',
				'save_format' => 'id',
				'preview_size' => 'map-img',
				'library' => 'all',
			),
			array (
				'key' => 'field_524f29fd79223',
				'label' => 'Location',
				'name' => 'location',
				'type' => 'location-field',
				'val' => 'address',
				'mapheight' => 300,
				'center' => '38.63687850000001,-90.25756849999999',
				'zoom' => 16,
				'scrollwheel' => 1,
				'mapTypeControl' => 1,
				'streetViewControl' => 1,
				'PointOfInterest' => 1,
			),
			array (
				'key' => 'field_52a0fb7a8b392',
				'label' => 'Location Number',
				'name' => 'num',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'location',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_national-leaders',
		'title' => 'National Leaders',
		'fields' => array (
			array (
				'key' => 'field_530b6a6f312df',
				'label' => 'Faculty Member',
				'name' => 'faculty_member',
				'type' => 'post_object',
				'post_type' => array (
					0 => 'faculty',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 1,
				'multiple' => 0,
			),
			array (
				'key' => 'field_52a0fb4d5f46c',
				'label' => 'Link',
				'name' => 'nl-link',
				'type' => 'website',
				'website_title' => 1,
				'internal_link' => 1,
				'output_format' => 0,
				'default_value' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'spotlight',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_news-releases',
		'title' => 'News Releases',
		'fields' => array (
			array (
				'key' => 'field_5273d2931a04c',
				'label' => 'URL',
				'name' => 'url',
				'type' => 'website',
				'website_title' => 0,
				'internal_link' => 1,
				'output_format' => 1,
				'default_value' => '',
			),
			array (
				'key' => 'field_526562a5de521',
				'label' => 'Video',
				'name' => 'video',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => 'http://www.youtube.com/watch?v=XXXXXXXXXXXXX',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_526ad43464149',
				'label' => 'Audio',
				'name' => 'audio',
				'type' => 'file',
				'save_format' => 'url',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'news_releases',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_page-extras',
		'title' => 'Page extras',
		'fields' => array (
			array (
				'key' => 'field_5307f657576df',
				'label' => 'Special header',
				'name' => 'special_header',
				'type' => 'post_object',
				'post_type' => array (
					0 => 'page',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 1,
				'multiple' => 0,
			),
			array (
				'key' => 'field_526ed9af938eb',
				'label' => 'Nav menu title',
				'name' => 'nav_menu_title',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_526fde04dfc61',
				'label' => 'Hide in Nav',
				'name' => 'hide_in_nav',
				'type' => 'checkbox',
				'choices' => array (
					1 => 'Hide in Nav?',
				),
				'default_value' => '',
				'layout' => 'vertical',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_promoted-result',
		'title' => 'Promoted Result',
		'fields' => array (
			array (
				'key' => 'field_52fe3b7e06d4d',
				'label' => 'Result source',
				'name' => 'result_source',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_52fe3291799e2',
				'label' => 'Promoted Result Terms',
				'name' => 'promoted_result_terms',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_52fe32ac799e3',
						'label' => 'Promoted result term',
						'name' => 'promoted_result_term',
						'type' => 'text',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'user_type',
					'operator' => '==',
					'value' => 'administrator',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'user_type',
					'operator' => '==',
					'value' => 'editor',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
			array (
				array (
					'param' => 'user_type',
					'operator' => '==',
					'value' => 'author',
					'order_no' => 0,
					'group_no' => 2,
				),
			),
			array (
				array (
					'param' => 'user_type',
					'operator' => '==',
					'value' => 'super_admin',
					'order_no' => 0,
					'group_no' => 3,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_promoted-results',
		'title' => 'Promoted Results',
		'fields' => array (
			array (
				'key' => 'field_52fe37a94f99c',
				'label' => 'Result URL',
				'name' => 'result_url',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'promoted_results',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_research-news',
		'title' => 'Research News',
		'fields' => array (
			array (
				'key' => 'field_51cde10369cdc',
				'label' => 'Expertise',
				'name' => 'expertise',
				'type' => 'select',
				'required' => 1,
				'choices' => array (
					'ad' => 'Alzheimer\'s disease',
					'cancer' => 'Cancer',
					'ant' => 'Ear, Nose and Throat',
					'endo' => 'Endocrinology',
					'gastro' => 'Gastroenterology/Digestive',
					'genomics' => 'Genomics & Personalized Medicine',
					'geriatrics' => 'Geriatrics',
					'vascular' => 'Heart and Vascular',
					'kidney' => 'Kidney',
					'leadership' => 'Leadership',
					'neuro' => 'Neurosciences',
					'obgyn' => 'Obstetrics and Gynecology',
					'eyes' => 'Ophthalmology',
					'ortho' => 'Orthopedics',
					'outreach' => 'Outreach',
					'psych' => 'Psychiatry',
					'public' => 'Public Health',
					'respiratory' => 'Pulmonology/Respiratory',
					'radiology' => 'Radiology/Imaging',
					'arthritis' => 'Rheumatology',
					'surgery' => 'Surgery',
					'transplant' => 'Transplant',
					'urology' => 'Urology',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 1,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'research_news',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_sidebar',
		'title' => 'Sidebar',
		'fields' => array (
			array (
				'key' => 'field_526ad52c059e3',
				'label' => 'Sidebars',
				'name' => 'sidebars',
				'type' => 'flexible_content',
				'layouts' => array (
					array (
						'label' => 'Default Sidebar',
						'name' => 'default',
						'display' => 'row',
						'min' => '',
						'max' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_526ad66326cd9',
								'label' => 'Sidebar Title',
								'name' => 'sidebar_title',
								'type' => 'text',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'html',
								'maxlength' => '',
							),
							array (
								'key' => 'field_526ad66e26cda',
								'label' => 'Sidebar Links',
								'name' => 'sidebar_links',
								'type' => 'repeater',
								'column_width' => '',
								'sub_fields' => array (
									array (
										'key' => 'field_526ad67d26cdb',
										'label' => 'Sidebar Link',
										'name' => 'sidebar_link',
										'type' => 'website',
										'column_width' => '',
										'website_title' => 1,
										'internal_link' => 1,
										'output_format' => 1,
										'default_value' => '',
									),
								),
								'row_min' => '',
								'row_limit' => '',
								'layout' => 'table',
								'button_label' => 'Add Row',
							),
						),
					),
					array (
						'label' => 'Single Link',
						'name' => 'single',
						'display' => 'row',
						'min' => '',
						'max' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_526ad6c326cdd',
								'label' => 'Single Link',
								'name' => 'single_link',
								'type' => 'website',
								'column_width' => '',
								'website_title' => 1,
								'internal_link' => 1,
								'output_format' => 1,
								'default_value' => '',
							),
						),
					),
					array (
						'label' => 'NYT Cancer Series',
						'name' => 'cancer',
						'display' => 'row',
						'min' => '',
						'max' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_526ad6fd494d7',
								'label' => 'Cancer Title',
								'name' => 'cancer_title',
								'type' => 'text',
								'column_width' => '',
								'default_value' => 'New York Times cancer series',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'html',
								'maxlength' => '',
							),
							array (
								'key' => 'field_526ad719494d8',
								'label' => 'Cancer Subtitle',
								'name' => 'cancer_subtitle',
								'type' => 'text',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'html',
								'maxlength' => '',
							),
							array (
								'key' => 'field_526ad724494d9',
								'label' => 'Cancer Links',
								'name' => 'cancer_links',
								'type' => 'repeater',
								'column_width' => '',
								'sub_fields' => array (
									array (
										'key' => 'field_526ad72f494da',
										'label' => 'Cancer Link',
										'name' => 'cancer_link',
										'type' => 'website',
										'column_width' => '',
										'website_title' => 1,
										'internal_link' => 1,
										'output_format' => 1,
										'default_value' => '',
									),
								),
								'row_min' => '',
								'row_limit' => '',
								'layout' => 'table',
								'button_label' => 'Add Row',
							),
						),
					),
					array (
						'label' => 'Outlook Option',
						'name' => 'outlook',
						'display' => 'row',
						'min' => '',
						'max' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_526ad764494dc',
								'label' => 'Outlook Issue URL',
								'name' => 'outlook_issue_url',
								'type' => 'text',
								'column_width' => '',
								'default_value' => 'http://outlook.wustl.edu',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
							array (
								'key' => 'field_526ad77b494dd',
								'label' => 'Outlook Thumbnail',
								'name' => 'outlook_thumbnail',
								'type' => 'image',
								'column_width' => '',
								'save_format' => 'url',
								'preview_size' => 'outlook-thumb',
								'library' => 'all',
							),
							array (
								'key' => 'field_526ad793494de',
								'label' => 'Outlook Title',
								'name' => 'outlook_title',
								'type' => 'text',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'html',
								'maxlength' => '',
							),
							array (
								'key' => 'field_526ad79f494df',
								'label' => 'Outlook Tease',
								'name' => 'outlook_tease',
								'type' => 'text',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'html',
								'maxlength' => '',
							),
						),
					),
					array (
						'label' => 'Connect with us',
						'name' => 'connect',
						'display' => 'row',
						'min' => '',
						'max' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_526ad7c4494e1',
								'label' => 'Connect with us Title',
								'name' => 'connect_title',
								'type' => 'text',
								'column_width' => '',
								'default_value' => 'Connect with us',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'html',
								'maxlength' => '',
							),
							array (
								'key' => 'field_526ad7dc494e2',
								'label' => 'Connect with us Buttons',
								'name' => 'connect_buttons',
								'type' => 'checkbox',
								'column_width' => '',
								'choices' => array (
									'fb' => 'Facebook',
									'twitter' => 'Twitter',
									'in' => 'LinkedIn',
									'youtube' => 'Youtube',
									'rss' => 'RSS',
								),
								'default_value' => '',
								'layout' => 'vertical',
							),
						),
					),
					array (
						'label' => 'Heart/Vascular',
						'name' => 'heart',
						'display' => 'row',
						'min' => '',
						'max' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_526ad85ccbe7c',
								'label' => 'Heart title',
								'name' => 'heart_title',
								'type' => 'text',
								'column_width' => '',
								'default_value' => 'Find a Heart Specialist',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'html',
								'maxlength' => '',
							),
							array (
								'key' => 'field_526ad86ccbe7d',
								'label' => 'Heart subtitle',
								'name' => 'heart_subtitle',
								'type' => 'text',
								'column_width' => '',
								'default_value' => 'To schedule an appointment with a Washington University heart specialist',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'html',
								'maxlength' => '',
							),
							array (
								'key' => 'field_526ad882cbe7e',
								'label' => 'Heart Links',
								'name' => 'heart_links',
								'type' => 'repeater',
								'column_width' => '',
								'sub_fields' => array (
									array (
										'key' => 'field_526ad88acbe7f',
										'label' => 'Heart Link',
										'name' => 'heart_link',
										'type' => 'website',
										'column_width' => '',
										'website_title' => 1,
										'internal_link' => 1,
										'output_format' => 1,
										'default_value' => '',
									),
									array (
										'key' => 'field_526ad898cbe80',
										'label' => 'Heart Link Phone',
										'name' => 'heart_link_phone',
										'type' => 'text',
										'column_width' => '',
										'default_value' => '',
										'placeholder' => '',
										'prepend' => '',
										'append' => '',
										'formatting' => 'html',
										'maxlength' => '',
									),
								),
								'row_min' => '',
								'row_limit' => '',
								'layout' => 'table',
								'button_label' => 'Add Row',
							),
						),
					),
					array (
						'label' => 'One-off',
						'name' => 'one_off',
						'display' => 'row',
						'min' => '',
						'max' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_5279311ab7bd6',
								'label' => 'Raw HTML',
								'name' => 'raw_html',
								'type' => 'wysiwyg',
								'column_width' => '',
								'default_value' => '',
								'toolbar' => 'full',
								'media_upload' => 'no',
							),
						),
					),
				),
				'button_label' => 'Add Sidebar',
				'min' => '',
				'max' => '',
			),
			array (
				'key' => 'field_525ea7532a560',
				'label' => 'Sidebar Examples',
				'name' => '',
				'type' => 'message',
				'message' => '<img src=\'/wp-content/themes/wusm/_/img/sidebars.jpg\'>',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
