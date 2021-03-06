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
$_['heading_title']       = 'คูปอง';

// Text
$_['text_success']        = 'สำเร็จ: คุณแก้ไขคูปองแล้ว!';
$_['text_percent']        = 'เปอร์เซ็นต์';
$_['text_amount']         = 'ตั้งค่า';

// Column
$_['column_name']         = 'ชื่อคูปอง';
$_['column_code']         = 'รหัส';
$_['column_discount']     = 'ส่วนลด';
$_['column_date_start']   = 'วันเริ่มต้น';
$_['column_date_end']     = 'วันสิ้นสุด';
$_['column_status']       = 'สถานะ';
$_['column_action']       = 'กระทำ';

// Entry
$_['entry_name']          = 'ชื่อคูปอง:';
$_['entry_description']   = 'รายละเอียดคูปอง:';
$_['entry_code']          = 'รหัส:<br /><span class="help">The code the customer enters to get the discount</span>';
$_['entry_type']          = 'ประเภท:<br /><span class="help">Percentage or Fixed Amount</span>';
$_['entry_discount']      = 'ส่วนลด:';
$_['entry_logged']        = 'ลูกค้าเข้าระบบ:<br /><span class="help">ลูกค้าต้องเข้าระบบก่อนถึงใช้คูปองนี้</span>';
$_['entry_shipping']      = 'จัดส่งฟรี:';
$_['entry_total']         = 'ยอดซื้อขั้นต่ำ:<br /><span class="help">ต้องซื้อสินค้าจนมียอดชำระตามที่กำหนดก่อนจะใช้คูปองได้.</span>';
$_['entry_product']       = 'สินค้า:<br /><span class="help">สามารถเลือกสินค้าที่คูปองนี้จะใช้ลดราคาได้. ไม่ต้องเลือกถ้าต้องการให้ใช้ลดได้กับสินค้าทุกประเภท.</span>';
$_['entry_date_start']    = 'วันเริ่มต้น:';
$_['entry_date_end']      = 'วันสิ้นสุด:';
$_['entry_uses_total']    = 'จำกัดจำนวนการใช้:<br /><span class="help">ลูกค้าจะใช้คูปองนี้ได้ไม่เกินค่าที่กำหนดไว้ (ครั้ง). ปล่อยให้ว่างไว้เพื่อไม่จำกัด</span>';
$$_['entry_uses_customer'] = 'จำกัดจำนวนการใช้ต่อลูกค้า 1 คน:<br /><span class="help">ระบุจำนวนครั้งที่ลูกค้าแต่ละคนสามารถใช้คูปองนี้ได้. ปล่อยให้ว่างไว้เพื่อไม่จำกัด</span>';
$_['entry_status']        = 'สถานะ:';

// Error
$_['error_permission']    = 'คำเตือน: คุณไม่ได้รับอนุญาติให้เข้าในส่วนคูปอง!';
$_['error_name']          = 'ชื่อคูปอง ต้องอยู่ระหว่าง 3 ถึง 64 ตัวอักษร!';
$_['error_description']   = 'รายละเอียดคูปอง ต้องมากกว่า 3 ตัวอักษร!';
$_['error_code']          = 'รหัสต้องอยู่ระหว่าง 3 - 10 ตัวอักษร!';
?>
