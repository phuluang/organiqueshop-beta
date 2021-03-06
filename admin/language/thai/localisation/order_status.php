<?php
################################################################################
#  ภาษาไทยจาก www.siamopencart.com ,www.thaiopencart.com,www.somsak2004.net
#  ระบบภาษาไทยหลังร้าน สำหรับ Opencart 1.4.6 โดย Somsak2004 วันที่ 3 เมษายน 2553
################################################################################
# โดยการสนับสนุนจาก
# Unitedsme.com : ผู้ให้บริการเช่าพื้นที่เว็บไซต์ จดโดเมน ระบบ Linux โทร. 081-454-9454 [คุณภูมิ]
# Net-LifeStyle.com : ผู้ให้บริการเช่าพื้นที่เว็บไซต์ จดโดเมน ระบบ Linux & Windows โทร. 086-338-5909 [คุณโสภณ]
# SiamWebThai.com : SEO ขั้นเทพ โปรโมทเว็บขั้นเซียน ออกแบบ พัฒนาเว็บไซต์ / ตามความต้องการ และถูกใจ Google 
# โทร. 086-549-9998 [คุณมานะ] ทำให้เว็บไซต์ของคุณติดหน้าแรกของ Google ตามคำที่คุณต้องการ!
################################################################################
/*
ทางทีมงานเราใคร่ขอความกรุณา ขอความร่วมมือในการคงไว้ซึ่ง tag ด้านขวาล่างให้คงอยู่ [Siamopencart],[ThaiOpencart]
เพราะเป็นกำลังเล็กๆให้กับทีมงาน หากคุณลบ link นี้ออก รบกวนไปหาใช้งานได้ที่ www.opencart.com
เองนะครับ หรือไม่ก็แปลเอง แก้ bug เอง อันเนื่องจากท่านทำการเสียมรรยาทในการใช้งานโปรแกรม.
โปรแกรมนี้จะแจกใช้งานฟรี ได้ทำให้คนไทยใช้โดยเฉพาะ แต่ทางทีมเราทำให้ฟรีๆ โดยไม่เสียค่าใช้จ่าย
เราขอเพียง link เล็กๆมาไปยังเว็บพัฒนา แค่นั้นเอง! หวังว่าคงได้รับความกรุณา จากผู้ใช้ทุกท่าน
เราบริการให้คำปรึกษา ช่วยแก้ปัญหากับ host ที่สนับสนุนการพัฒนาโปรแกรมเพื่อคนไทย! 
ที่ www.siamopencart.com/webboard/  ให้เฉพาะผู้ให้ tag กลับมาเว็บไซต์เราเท่านั้น!
ทีมงาน Siamopencart
3 เมษายน 2553

หมายเหตุ.... Host ที่เราไม่รองรับการใช้งานหากเกิดปัญหาต้องติดต่อกับผู้ให้บริการของคุณเองครับ!
1. www.hostzaa.com
2. www.citec.us
3. www.mehostdd.com
*/

// Heading
$_['heading_title']    = 'สถานะคำสั่งซื้อ';

// Text
$_['text_success']           = 'สำเร็จ: แก้ไขสถานะคำสั่งซื้อเรียบร้อย!';

// Column
$_['column_name']      = 'ชื่อสถานะคำสั่งซื้อ';
$_['column_action']    = 'การกระทำ';

// Entry
$_['entry_name']       = 'ชื่อสถานะคำสั่งซื้อ:';

// Error
$_['error_permission']  = 'คำเตือน: คุณไม่ได้รับอนุญาตให้แก้ไขสถานะคำสั่งซื้อ!';
$_['error_name']        = 'ชื่อสถานะคำสั่งซื้อต้องอยู่ระหว่าง 3 ถึง 32 ตัวอักษร!';
$_['error_default']     ='คำเตือน: สถานะคำสั่งซื้อนี้ลบไม่ได้เพราะใช้เป็นค่าเริ่มต้นของร้านค้า';
$_['error_download']   = 'คำเตือน: สถานะคำสั่งซื้อนี้ลบไม่ได้เพราะใช้อยู่ในดาวน์โหลดเปนค่าเริ่มต้น!';
$_['error_store']      == 'คำเตือน:  สถานะคำสั่งซื้อนี้ลบไม่ได้เพราะใช้อยู่ใน %s ร้านค้า!';
$_['error_order']       =  'คำเตือน: สถานะคำสั่งซื้อนี้ลบไม่ได้เพราะใช้อยู่ใน %s คำสั่งซื้อ!';
?>
