@extends('frontend.layout.main')

@section('page')

    <main>
        <article class="wrapper">
            @if(isset($articleimage))
                <div class="reveal">
                    <div class="main-img rotate-bg no-rotate">
                        <img src="{{url($content->pic)}}" alt="">
                    </div>
                </div>
            @endif
            {{--<h1>{{$content->locales[$locale]->title}}</h1>--}}
            {{--<div>{!! $content->locales[$locale]->content !!}</div>--}}
            <h1>
            </h1>

            <div>
                <h2 class="text-primary">การเรียกร้องค่าสินไหมทดแทนประกันภัยการเดินทางปลอดภัยภายในประเทศ
                    tune i - pass: ta inbound for foreign (visa 100k usd)</h2>
                <h2 class="text-primary">1. ขั้นตอน ระยะเวลา และวิธีการขอรับค่าสินไหมทดแทน</h2>
                <ul>
                    <li>
                        <strong>1.1. ช่องทางการเรียกร้องค่าสินไหมทดแทน</strong>

                        <ul style="padding-left:20px;">
                            <li>- โทรศัพท์: 02-078-5656 กด 1 กด 4</li>
                            <li>
                                - ติดต่อบริษัทฯ โดยตรงทางอีเมล, โทรศัพท์ หรือทางไปรษณีย์
                                ฝ่ายสินไหมทดแทนทั่วไป
                            </li>
                            <li>
                                บริษัท ทูนประกันภัย จำกัด (มหาชน)
                                เลขที่ 3199 อาคารมาลีนนท์ ทาวเวอร์ ชั้น 14 ถนนพระราม 4 แขวงคลองตัน
                                เขตคลองเตย กรุงเทพมหานคร 10110
                            </li>
                            <li>
                                - ติดต่อทางอีเมล: <a href="mailto:tunetraveleasy.claim@tuneprotect.com"
                                                     title="tunetraveleasy.claim@tuneprotect.com">tunetraveleasy.claim@tuneprotect.com</a>
                            </li>
                        </ul>
                    </li>
                    <li><strong>1.2. ตรวจสอบสิทธิ์รับแจ้งและเปิดเคลม</strong></li>
                    <li><strong>1.3. ขอเอกสารเพิ่มเติม แจ้งผ่านอีเมล</strong></li>
                    <li><strong>1.4. พิจารณาและตรวจสอบเอกสารที่ได้รับ</strong></li>
                    <li><strong>1.5. แจ้งผลการพิจารณาค่าสินไหมทดแทน</strong></li>
                </ul>

                <h2 class="text-primary">
                    2. การแจ้งและการเรียกร้องค่าสินไหมทดแทน
                </h2>
                <p>
                    <strong>ผู้ถือกรมธรรม์ประกันภัยและ/หรือผู้เอาประกันภัย</strong>
                    ผู้รับผลประโยชน์หรือตัวแทนของบุคคลดังกล่าวแล้วแต่กรณี จะต้องแจ้งให้บริษัทฯ
                    ทราบถึงการบาดเจ็บหรือการเจ็บป่วยโดยไม่ชักช้า
                    และต้องส่งมอบหลักฐานและเอกสารตามที่ระบุไว้ข้างล่างนี้ให้บริษัทฯ
                </p>
                <p>
                    ในกรณีที่มีการเสียชีวิตจะต้องให้บริษัทฯ ทราบทันที
                    เว้นแต่ผู้เอาประกันภัยมีเหตุอันสมควรไม่อาจกระทำการดังกล่าวได้ในภายในเวลาที่กำหนดหรือภายในกำหนดเวลาที่บริษัทฯ
                    ขยายให้โดยต้องทำเป็นหนังสือชี้แจง
                </p>


                <h2 class="text-primary">3. ระยะเวลาในการขอรับค่าสินไหมทดแทน
                    เมื่อบริษัทได้รับเอกสารประกอบการพิจารณาครบถ้วน
                </h2>
                <p>
                    บริษัทจะชดใช้ค่าสินไหมทดแทน ภายใน 15 วันทำการ หลังจากที่ผู้เอาประกันภัย ผู้รับผลประโยชน์
                    หรือผู้มีอำนาจลงนาม ลงนามในหนังสือตกลงค่าสินไหมทดแทนและจัดส่งเอกสารต่างๆ
                    ที่เกี่ยวข้องให้แก่บริษัทเป็นที่เรียบร้อยแล้ว
                </p>
                <p>
                    - กรณีเสียชีวิต บริษัทฯ จะพิจารณาจ่ายค่าสินไหมทดแทนให้แก่ผู้รับผลประโยชน์
                </p>
                <p>
                    - กรณีอื่นๆ เช่น สูญเสียอวัยวะและสายตา, ทุพพลภาพถาวร, ค่ารักษาพยาบาล, บอกเลิกการเดินทาง,
                    กระเป๋าเดินทางและทรัพย์สินเสียหายฯลฯ บริษัทฯ จะพิจารณาจ่ายค่าสินไหมทดแทนให้แก่ผู้เอาประกันภัย
                </p>


                <h2 class="text-primary">4. เอกสารที่ใช้ในการพิจารณาค่าสินไหมทดแทน</h2>
                <p >
                    <strong>เอกสารเบื้องต้น
                        <span style="text-decoration: underline;">(ฉบับจริง)</span></strong>
                </p>

                <ul>
                    <li>
                        1. แบบฟอร์มเรียกร้องค่าสินไหมทดแทน<a href="/storage/claim-insurance/tune-ipass/ta-inbound-for-foreign.pdf"   title="(คลิกดาวน์โหลดที่นี่)">
                            <strong>(คลิกดาวน์โหลดที่นี่)</strong></a> พร้อมกรอกข้อมูลครบถ้วนและถูกต้อง
                    </li>
                    <li>
                        2. กำหนดการเดินทาง (travel itinerary)
                    </li>
                    <li>
                        3. สำเนากรมธรรม์ของผู้เอาประกันภัย)
                    </li>
                    <li>4. สำเนา passport และหน้าที่ประทับตราเข้าประเทศจาก ตม.</li>
                    <li>
                        5. รายละเอียดบัญชีธนาคาร (bank account details)
                    </li>
                    <li>
                        6. ใบรับรองแพทย์ยืนยันการตรวจ covid test จากประเทศต้นทาง (fit to fly doctor certificate)
                    </li>
                </ul>
                <p >
                    <strong>กรณีเสียชีวิต (death) กรุณานำส่งเอกสารประกอบการพิจารณาค่าสินไหมดังต่อไปนี้ <span
                                style="text-decoration: underline;">(ฉบับจริง)</span></strong>
                </p>

                <ul>
                    <li>1. สำเนาบัตรประจำตัวประชาชนของผู้เอาประกันภัย พร้อมลงชื่อรับรองสำเนาถูกต้อง
                        โดยผู้รับผลประโยชน์
                    </li>
                    <li>2. สำเนาทะเบียนบ้านของผู้เอาประกันภัย พร้อมลงชื่อรับรองสำเนาถูกต้อง โดยผู้รับผลประโยชน์</li>
                    <li>3. ใบเปลี่ยนชื่อนามสกุลของผู้เอาประกันภัย (ถ้ามี) พร้อมลงชื่อรับรองสำเนาถูกต้อง
                        โดยผู้รับผลประโยชน์
                    </li>
                    <li>4. สำเนาใบมรณบัตร พร้อมลงชื่อรับรองสำเนาถูกต้อง โดยผู้รับผลประโยชน์</li>
                    <li>5. สำเนาหนังสือรับรองการตาย (ออกโดยโรงพยาบาล) พร้อมลงชื่อรับรองสำเนาถูกต้อง
                        โดยผู้รับผลประโยชน์
                    </li>
                    <li>6. รายงานบันทึกประจำวันการเกิดเหตุ (รับรองสำเนาถูกต้อง โดยเจ้าหน้าที่ตำรวจเจ้าของคดี)</li>
                    <li>7. รายงานสรุปสำนวนคดี และรูปถ่ายสถานที่เกิดเหตุ (ถ้ามี) พร้อมรับรองสำเนาถูกต้อง
                        โดยเจ้าหน้าที่ตำรวจเจ้าของคดี
                    </li>
                    <li>8. รายงานชันสูตรพลิกศพ (รับรองสำเนาถูกต้อง โดยเจ้าหน้าที่ตำรวจเจ้าของคดี
                        และแพทย์ผู้ทำการชันสูตร)
                    </li>
                    <li>9. รายงานการผ่าศพ (ถ้ามี)</li>
                    <li>10. สำเนาประวัติการรักษาทั้งหมดจากโรงพยาบาล ตั้งแต่เกิดเหตุจนกระทั่งเสียชีวิต</li>
                    <li>11. สำเนาบัตรประชาชนของผู้รับผลประโยชน์ พร้อมลงชื่อรับรองสำเนาถูกต้อง</li>
                    <li>12. สำเนาทะเบียนบ้านของผู้รับผลประโยชน์ พร้อมลงชื่อรับรองสำเนาถูกต้อง</li>
                    <li>13. ใบเปลี่ยนชื่อนามสกุลของผู้รับผลประโยชน์(ถ้ามี) พร้อมลงชื่อรับรองสำเนาถูกต้อง</li>
                    <li>14. เอกสารแสดงความสัมพันธ์ กรณี ผู้รับผลประโยชน์ เป็น สามี/ภรรยา/บุตร เช่น ทะเบียนสมรส,
                        หนังสือรับรองบุตร, สูติบัตรบุตร
                    </li>
                    <li>15. สำเนาหน้าบัญชีธนาคารแบบออมทรัพย์ ของผู้รับผลประโยชน์</li>
                </ul>
                <p >
                    <strong>กรณีสูญเสียอวัยวะและสายตา (dismemberment and loss of sight)
                        กรุณานำส่งเอกสารประกอบการพิจารณาค่าสินไหมดังต่อไปนี้
                        <span style="text-decoration: underline;">(ฉบับจริง)</span></strong>
                </p>
                <ul>
                    <li>1. สำเนาบัตรประจำตัวประชาชนของผู้เอาประกันภัย พร้อมลงชื่อรับรองสำเนาถูกต้อง</li>
                    <li>2. สำเนาทะเบียนบ้านของผู้เอาประกันภัย พร้อมลงชื่อรับรองสำเนาถูกต้อง</li>
                    <li>3. ใบรับรองแพทย์ตั้งแต่เกิดเหตุจนถึงปัจจุบัน</li>
                    <li>4. สำเนาบัตรประจำตัวผู้พิการ</li>
                    <li>5. แบบประเมินการสูญเสียอวัยวะและสายตา จากแพทย์ผู้ทำการรักษา</li>
                    <li>6. สำเนาประวัติการรักษาทั้งหมดจากโรงพยาบาล ตั้งแต่เกิดเหตุจนถึงปัจจุบัน</li>
                    <li>7. รูปถ่ายเต็มตัว / อวัยวะที่สูญเสีย ณ ปัจจุบัน</li>
                    <li>8. รายงานบันทึกประจำวันการเกิดเหตุ (ถ้ามี) (รับรองสำเนาถูกต้อง โดยเจ้าหน้าที่ตำรวจเจ้าของคดี)
                    </li>
                    <li>9. รายงานสรุปสำนวนคดี และรูปถ่ายสถานที่เกิดเหตุ (ถ้ามี) พร้อมรับรองสำเนาถูกต้อง
                        โดยเจ้าหน้าที่ตำรวจเจ้าของคดี
                    </li>
                </ul>
                <p >
                    <strong>กรณีทุพพลภาพถาวรสิ้นเชิง (permanent disability)
                        กรุณานำส่งเอกสารประกอบการพิจารณาค่าสินไหมดังต่อไปนี้
                        <span style="text-decoration: underline;">(ฉบับจริง)</span></strong>
                </p>

                <ul>
                    <li>1. สำเนาบัตรประจำตัวประชาชนของผู้เอาประกันภัย พร้อมลงชื่อรับรองสำเนาถูกต้อง</li>
                    <li>2. สำเนาทะเบียนบ้านของผู้เอาประกันภัย พร้อมลงชื่อรับรองสำเนาถูกต้อง</li>
                    <li>3. ใบรับรองแพทย์ตั้งแต่เกิดเหตุจนถึงปัจจุบัน</li>
                    <li>4. สำเนาบัตรประจำตัวผู้พิการ</li>
                    <li>5. แบบประเมินการทุพพลภาพถาวร จากแพทย์ผู้ทำการรักษา</li>
                    <li>6. สำเนาประวัติการรักษาทั้งหมดจากโรงพยาบาล ตั้งแต่เกิดเหตุจนถึงปัจจุบัน</li>
                    <li>7. รูปถ่ายเต็มตัวของผู้เอาประกันภัยในสภาพปัจจุบันที่เป็น</li>
                    <li>8. รายงานบันทึกประจำวันการเกิดเหตุ (ถ้ามี) (รับรองสำเนาถูกต้อง โดยเจ้าหน้าที่ตำรวจเจ้าของคดี)
                    </li>
                    <li>9. รายงานสรุปสำนวนคดี และรูปถ่ายสถานที่เกิดเหตุ (ถ้ามี) พร้อมรับรองสำเนาถูกต้อง
                        โดยเจ้าหน้าที่ตำรวจเจ้าของคดี
                    </li>
                    <li>10. สำเนาหน้าบัญชีธนาคารแบบออมทรัพย์ ของผู้เอาประกันภัย/ ผู้อนุบาล</li>
                    <li>11. สำเนาบัตรประจำตัวประชาชนของผู้อนุบาล พร้อมลงชื่อรับรองสำเนาถูกต้อง</li>
                    <li>12. สำเนาทะเบียนบ้านของผู้อนุบาล พร้อมลงชื่อรับรองสำเนาถูกต้อง</li>
                    <li>13. หนังสือรับรอง หรือหนังสือแต่งตั้งผู้อนุบาล</li>
                    <li>14. สำเนาหน้าบัญชีธนาคารแบบออมทรัพย์ ของผู้เอาประกันภัย/ ผู้อนุบาล</li>
                </ul>
                <p >
                    <strong>การเลื่อนหรือบอกเลิกการเดินทาง (trip cancellation or postponement)
                    </strong>
                </p>
                <ul>
                    <li>1. ใบรายงานแพทย์ หรือใบรับรองแพทย์ระบุอาการสำคัญ ผลการวินิจฉัย และการรักษาพยาบาล
                    </li>
                    <li>2. สำเนามรณะบัตรของผู้เสียชีวิต (กรณีเกิดจากการเสียชีวิต) พร้อมรับรองสำเนาถูกต้อง
                    </li>
                    <li>3. สำเนาสูติบัตร, สำเนาทะเบียนสมรส หรือเอกสารใด ๆ
                        เพื่อยืนยันความสัมพันธ์กรณีเกิดเหตุเกี่ยวข้องกับคู่สมรส บุตร หรือญาติใกล้ชิด
                    </li>
                </ul>
                <p >
                    <strong>การลดจำนวนวันเดินทาง (trip curtailment)
                    </strong>
                </p>
                <ul>
                    <li>1. ใบรายงานแพทย์ หรือใบรับรองแพทย์ระบุอาการสำคัญ ผลการวินิจฉัย และการรักษาพยาบาล
                    </li>
                    <li>2. สำเนามรณะบัตรของผู้เสียชีวิต (กรณีเกิดจากการเสียชีวิต) พร้อมรับรองสำเนาถูกต้อง
                    </li>
                    <li>3. สำเนาสูติบัตร, สำเนาทะเบียนสมรส หรือเอกสารใด ๆ
                        เพื่อยืนยันความสัมพันธ์กรณีเกิดเหตุเกี่ยวข้องกับคู่สมรส บุตร หรือญาติใกล้ชิด
                    </li>
                    <li>4. สำเนาใบเสร็จค่าใช้จ่ายในการเลื่อนตั๋ว พร้อมบัตรขึ้นเครื่อง (boarding pass)
                        ของสายการบินแอร์เอเชีย
                    </li>
                    <li>5. สำเนาใบเสร็จค่าโดยสารสายการบินพาณิชย์อื่นเพื่อทดแทนการเดินทางเดิม พร้อมบัตรขึ้นเครื่อง
                        (boarding pass)
                    </li>
                </ul>
                <p >
                    <strong>การล่าช้าในการเดินทาง (flight delay)</strong>
                </p>
                <ul>
                    <li>1. เอกสารแสดงวันเดินทาง ระยะเวลาล่าช้า พร้อมเหตุผลที่ล่าช้าจากายการบินหรือบริษัทขนส่งสาธารณะ
                    </li>
                    <li>2. เอกสารที่จำเป็นอื่น ๆ ตามที่บริษัทร้องขอ
                    </li>
                </ul>
                <p >
                    <strong>ค่าใช้จ่ายในการเดินทางเพื่อเยี่ยมผู้ป่วยที่โรงพยาบาล</strong>
                </p>
                <ul>
                    <li>1. ใบเสร็จรับเงินต้นฉบับสำหรับการจ่ายค่าเดินทาง ค่าที่พักและค่าอาหาร</li>
                    <li>2. รายงานจากแพทย์ผู้ทำการรักษาทั้งหมด</li>
                    <li>3. เอกสารที่จำเป็นอื่น ๆ ตามที่บริษัทร้องขอ</li>
                </ul>
                <p >
                    <strong>ความสูญเสียหรือเสียหายต่อกระเป๋าเดินทาง และ/หรือทรัพย์สินส่วนตัว(baggage or personal effects)</strong>
                </p>
                <ul>
                    <li>1. รายงานความเสียหาย (irregularity report) ของสายการบิน</li>
                    <li>2. ภาพถ่ายแสดงความเสียหายดังกล่าว</li>
                    <li>3. ใบเสนอราคา หรือใบเสร็จรับเงินค่าซ่อมแซมทรัพย์สินที่เสียหาย</li>
                    <li>4. ข้อมูลรายละเอียดยืนยันราคากระเป๋า,ยี่ห้อรุ่น,ปีที่ซื้อ</li>
                    <li>5. baggage tag หรือบัตรรับเช็คอินกระเป๋าเดินทางของสายการบิน</li>
                    <li>6. ใบบันทึกประจำวันของเจ้าหน้าที่ตำรวจท้องถิ่น พร้อมรับรองสำเนาถูกต้องโดยเจ้าหน้าที่เจ้าของคดี กรณีความสูญเสียหรือเสียหายเกิดจากการขู่เข็ญ หรือบังคับในลักษณะรุนแรง
                    </li>
                </ul>
                <p >
                    <strong>การล่าช้าของกระเป๋าเดินทาง (baggage delay)</strong>
                </p>
                <ul>
                    <li>1. baggage tag หรือบัตรรับเช็คอินกระเป๋าเดินทางของสายการบินแอร์เอเชีย</li>
                    <li>2. จดหมายรับรองความสูญเสียหรือความเสียหายที่เกิดขึ้นจากสายการบินแอร์เอเชีย หรือฝ่ายบริหารของบริษัทผู้ขนส่ง (irregularity report)
                    </li>
                </ul>
                <p >
                    <strong>ค่ารักษาพยาบาลเนื่องจากการบาดเจ็บหรือการเจ็บป่วย (medical expense)</strong>
                </p>
                <ul>
                    <li>1. ใบรายงานแพทย์ หรือใบรับรองแพทย์ระบุอาการสำคัญ ผลการวินิจฉัย และการรักษาพยาบาล</li>
                    <li>2. ใบเสร็จรับเงิน (ฉบับจริง) ที่แสดงรายการค่าใช้จ่าย และใบสรุปปิดหน้างบ (สรุปค่าใช้จ่ายทั้งหมด) ของสถานพยาบาล พร้อมรายการยา และรายละเอียดค่าใช้จ่ายทั้งหมด

                    </li>
                    <li>
                        3. สำเนาประวัติการรักษาทั้งหมด รวมถึงผล lap ทั้งหมด
                    </li>
                </ul>
                <p >
                    <strong>ค่าใช้จ่ายในการเคลื่อนย้ายเพื่อรักษาพยาบาลฉุกเฉินและการส่งศพกลับประเทศ (emergency medical evacuation & repatriation)</strong>
                </p>
                <ul>
                    <li> กรุณาติดต่อบริการ tune insurance thailand ที่หมายเลขโทรศัพท์ +662 078 5656 กด 1 กด 4
                    </li>

                </ul>
                <p >
                    <strong>การสูญหายหรือเสียหายของเอกสารที่เกี่ยวข้องกับการเดินทาง</strong>
                </p>
                <ul>
                    <li>1. สำเนาหนังสือเดินทางของผู้เอาประกันภัย และ/หรือหลักฐานการเดินทาง แล้วแต่กรณี
                    </li>
                    <li>
                        2. สำเนาบันทึกประจำวันของตำรวจในท้องที่ที่เกิดเหตุ แล้วแต่กรณี
                    </li>
                    <li>
                        3. ใบเสร็จรับเงินต้นฉบับที่แสดงรายการค่าใช้จ่าย
                    </li>
                    <li>
                        4. เอกสารยืนยันการสูญหายหรือเสียหายของผู้จัดการหรือเจ้าของสถานพำนักที่ผู้เอาประกันภัยพักขณะที่เกิดการสูญหายหรือเสียหาย รวมทั้งเอกสารแสดงรายการจ่ายของผู้จัดการหรือเจ้าของสถานพำนักนั้น (ถ้ามี)
                    </li>
                </ul>
                <p >
                    <strong>ความรับผิดต่อบุคคลภายนอก</strong>
                </p>
                <ul>
                    <li>1. สำเนาหนังสือเดินทางของผู้เอาประกันภัย และ/หรือหลักฐานการเดินทาง แล้วแต่กรณี
                    </li>
                    <li>
                        2. สำเนาบันทึกประจำวันของตำรวจในท้องที่ที่เกิดเหตุ แล้วแต่กรณี
                    </li>
                    <li>
                        3. หลักฐานอื่น ๆ ที่บริษัทร้องขอตามความจำเป็น
                    </li>
                </ul>
                <p >
                    <strong>ความรับผิดต่อบัตรเครดิต</strong>
                </p>
                <ul>
                    <li>1. สำเนาใบบันทึกประจำวันของตำรวจในท้องที่ที่เกิดเหตุ</li>
                    <li>2. ใบแสดงรายการบัตรเครดิตที่แสดงธุรกรรมที่ไม่ได้รับอนุญาต</li>
                </ul>
                <h2 class="text-primary">5. วิธีการในการขอรับค่าสินไหมทดแทน
                </h2>
                <p >
                    - โอนเงิน (กรุณาแนบรายละเอียดบัญชีธนาคาร (bank account details))
                </p>
                <h2 class="text-primary">6. วิธีการติดต่อบริษัท และหน่วยงานที่เกี่ยวข้อง กรณีมีข้อพิพาทหรือเรื่องร้องเรียน</h2>
                <p >
                    หากผู้เอาประกันภัยมีข้อแนะนำ ข้อร้องเรียน ให้ติดต่อเบอร์โทรศัพท์ 02-078-5656
                </p>

                <p>
                    <strong>ส่วนบริหารจัดการข้อร้องเรียน</strong><br>
                    3199 อาคารมาลีนนท์ ทาวเวอร์ (ชั้น 14) ถนนพระราม 4 แขวงคลองตัน
                    เขตคลองเตย กรุงเทพมหานคร 10110
                </p>
            </div>
        </article>
    </main>
@endsection
