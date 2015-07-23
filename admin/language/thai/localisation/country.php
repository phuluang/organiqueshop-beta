<?php
################################################################################
#  ชุดภาษาไทยหลังร้าน สำหรับ Opencart 1.4.6 โดย Somsak2004 วันที่ 3 เมษายน 2553
#  ปรับปรุง สำหรับรุ่น 1.4.9 โดย DomainHost360.com วันที่ 06/09/2553
################################################################################
# ผู้ให้การสนับสนุนโปรเจค Siam Opencart
#
# DomainHost360.com: บริการ Hosting สำหรับ Opencart พื้นที่ 10 GB ปีละ 999 บาท Server เร็วสุดในไทย
# Unitedsme.com : ผู้ให้บริการเช่าพื้นที่เว็บไซต์ จดโดเมน ระบบ Linux โทร. 081-454-9454 [คุณภูมิ]
# Net-LifeStyle.com : ผู้ให้บริการเช่าพื้นที่เว็บไซต์ จดโดเมน ระบบ Linux & Windows โทร. 086-338-5909 [คุณโสภณ]
# SiamWebThai.com : SEO ขั้นเทพ โปรโมทเว็บขั้นเซียน ออกแบบ พัฒนาเว็บไซต์ / ตามความต้องการ และถูกใจ Google 
# โทร. 086-549-9998 [คุณมานะ] ทำให้เว็บไซต์ของคุณติดหน้าแรกของ Google ตามคำที่คุณต้องการ!
################################################################################
# ขอแนะนำ Web hosting สำหรับ Open cart
#
#1. www.domainhost360.com
#2. www.hostzaa.com
#3. www.citec.us
#4. www.mehostdd.com
################################################################################


// Heading
$_['heading_title']          = 'ประเทศ';

// Text
$_['text_success']           = 'สำเร็จ: แก้ไขประเทศเรียบร้อย!';

// Column
$_['column_name']            = 'ชื่อประเทศ';
$_['column_iso_code_2']      = 'รหัส ISO (2)';
$_['column_iso_code_3']      = 'รหัส ISO (3)';
$_['column_action']          = 'การกระทำ';

// Entry
$_['entry_status']           = 'สถานะประเทศ:';
$_['entry_name']             = 'ชื่อประเทศ:';
$_['entry_iso_code_2']       =  'รหัส ISO (2):';
$_['entry_iso_code_3']       =  'รหัส ISO (3):';
$_['entry_address_format']   = 'รูปแบบที่อยู่:<br /><span class="help">
ชื่อ = {firstname}<br />
นามสกุล = {lastname}<br />
บริษัท = {company}<br />
ที่อยู่ 1 = {address_1}<br />
ที่อยู่ 2 = {address_2}<br />
จังหวัด = {city}<br />
รหัสไปรษณีย์ = {postcode}<br />
โซน = {zone}<br />
รหัสโซน = {zone_code}<br />
ประเทศ = {country}</span>';
$_['entry_postcode_required']= 'ต้องระบุรหัสไปรษณีย์:';

// Error
$_['error_permission']       = 'คำเตือน: คุณไม่ได้รับอนุญาตให้แก้ไขประเทศ!';
$_['error_name']             = 'ชื่อประเทศต้องอยู่ระหว่าง 3 ถึง 128 ตัวอักษร!';
$_['error_default']          = 'คำเตือน: ชื่อประเทศนี้ลบไม่ได้เพราะใช้เป็นค่าเริ่มต้นของร้านค้า';
$_['error_store']            = 'คำเตือน: ประเทศนี้ลบไม่ได้เพราะใช้อยู่ใน %s ร้านค้า!';
$_['error_address']          = 'คำเตือน: ชื่อประเทศนี้ลบไม่ได้เพราะมีการใช้ในประเทศ %s ที่อยู่ที่มี!';
$_['error_zone']             = 'คำเตือน: ชื่อประเทศนี้ลบไม่ได้เพราะมีการใช้อยู่ %s โซน!';
$_['error_zone_to_geo_zone'] = 'คำเตือน: ชื่อประเทศนี้ลบไม่ได้เพราะมีการใช้อยู่ %s โซนในเขตภูมิศาสตร์!';
?>