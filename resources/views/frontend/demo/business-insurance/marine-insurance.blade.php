@extends('frontend.layout.main')

@section('page')

    <main>
        <article class="wrapper">
            @if(isset($articleImage))
                <div class="reveal">
                    <div class="main-img rotate-bg no-rotate">
                        <img src="{{url($content->pic)}}" alt="">
                    </div>
                </div>
            @endif

            <h1 style="margin-bottom: 50px;text-align: center">ประกันภัยทางทะเล และขนส่ง</h1>

            <div>
                <div style="margin-bottom: 30px">
                    <h2 style="color: #262932">
                        ให้ทูนฯ ดูแลการขนส่งสินค้าของคุณอย่างมั่นใจ
                    </h2>
                    <p>
                        การประกันภัยการขนส่งสินค้าทางทะเล
                        คุ้มครองความสูญเสียหรือความเสียหายที่เกิดจากภัยทางทะเลในระหว่างการเดินทางหรือการขนส่งทางทะเล
                        ซึ่งวินาศภัยที่เกิดขึ้นกับสินค้าที่ขนส่งทางเรือ หรือทางอากาศ รวมถึงการขนส่งทางบก โดยสามารถ
                        แบ่งออกเป็น
                    </p>
                </div>
                <div style="margin-bottom: 30px">
                    <h2 style="color: #262932">
                        ประกันภัยการขนส่งสินค้าทางทะเลและอากาศ
                    </h2>
                    <p>
                        คุ้มครองความเสียหายของสินค้าระหว่างการขนส่งสินค้าระหว่างประเทศจากภัยต่างๆ เช่น ไฟไหม้ ระเบิด แผ่นดินไหว เรือเกยตื้น ชนกับวัตถุอื่น สินค้าถูกน้ำทะเลซัด สินค้าถูกขโมย สินค้าแตกหัก
                    </p>
                </div>
                <div style="margin-bottom: 30px">
                    <h2 style="color: #262932">
                        ประกันภัยการขนส่งภายในประเทศ
                    </h2>
                    <p>
                        คุ้มครองความเสียหายของสินค้าระหว่างการขนส่งในประเทศจากภัยต่างๆ เช่น ไฟไหม้ ระเบิด การชนกับพาหนะอื่น รถ/รถไฟคว่ำ ตกสะพานหรือสะพานขาด เครื่องบินตก เรือจม เรือเกยตื้น
                    </p>
                </div>
                <div style="margin-bottom: 30px">
                    <h2 style="color: #262932">
                        ประกันภัยความรับผิดของผู้ขนส่ง
                    </h2>
                    <p>
                        คุ้มครองความเสียหายของสินค้าที่เกิดขึ้นในขณะขนส่งหรือขนถ่ายของจากยานพาหนะที่ขนส่งที่ระบุไว้ในกรมธรรม์ที่เกิดจากผู้ขนส่ง
                    </p>
                </div>
            </div>
        </article>
    </main>
@endsection