<?php
  $this->load->view('header');
?>
  
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width:1140px;
	  height:300px;
      margin: auto;
  }
  </style>
    </head>
	<!--body-->
	  <body>
	    <nav class="navbar navbar-default navbar-inverse shadow" data-spy="affix" data-offset-top="150">
            <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                  <a class="navbar-brand" href="<?=base_url()?>"><img class="img-logo" src="<?=base_url()?>images/logo.png" alt="MQuiz"></a>
                </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right one">
                        <li class="active"><a href="<?=base_url()?>">Home</a></li>
                        <li><a href="<?=base_url()?>mquiz/about.html">About</a></li>
                        <li><a href="<?=base_url()?>mquiz/categories.html">Categories</a></li>
                        <li><a href="<?=base_url()?>mquiz/contactus.html">Contact Us</a></li>
                        <li><a href="<?=base_url()?>mquiz/signin.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="<?=base_url()?>mquiz/login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
			<!--slider-->

    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="<?=base_url();?>images\image1.jpg" alt="Chania" width="460" height="345">
                </div>
                <div class="item">
                    <img src="<?=base_url();?>images\image2.jpg" alt="Chania" width="460" height="345">
                </div>
                <div class="item">
                    <img src="<?=base_url();?>images\image3.jpg" alt="Flower" width="460" height="345">
                </div>
                <div class="item">
                    <img src="<?=base_url();?>images\image4.jpg" alt="Flower" width="460" height="345">
                </div>
            </div>
                 <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            	<h2 class="text-center head-color">Disclaimer Policy</h2>
                <h3>MQuiz Disclaimer Policy</h3>
                <p>The information, tips, advice, etc contained on MQUIZ is provided in good faith. All information is believed to be accurate.</p>
                <h3>Limitation of Liability</h3>
                <p><span style="color:#F7308F">MQuiz</span>  shall not be responsible for any claimed damages, including incidental & consequential damages, which may arise from MQUIZ going off-line or being unavailable for any reason whatsoever.</p>
                <p>MQUIZ cannot be held liable for system down time, crashes or data loss as a result of certain equipment, routing, software & programming used by MQUIZ.
               <h3>External links/Banners</h3>
               <p>MQUIZ does not endorse external websites, unless otherwise stated. We are not responsible for the content of external websites. You are advised to read their Privacy Policy.</p>
               <p>M Quiz does not guarantee that the links will work all of the time</p>
               <span style="color:red">Contact concerning linking and disclaimers</span> 
              <p> Should you have any questions about this linking policy, please contact MQUIZ using the details set out below:</p>
              <p> <span style="color:#03A9F4">Mquiz007@gmail.com</span> </p>
                 <span style="color:red">E-mail Policies and Important Disclaimers relating to Mquiz's E-mail system and electronic communications and documents</span>
                <p>MQuiz e-mails (including all attachments) and all other forms of electronic transmissions are confidential and may contain privileged information. They may be read, copied and used only by the intended recipients, and must not be re-transmitted in any true or amended form without our consent, outside of the intended scope of transmission. If you have received any such communication in error, please contact us immediately by return e-mail<span style="color:#03A9F4"> (mquiz007@gmail.com)</span> or by telephone<span style="color:#03A9F4"> +918712330850</span> Please then delete it and do not disclose its contents to any other person or entity. Security and reliability of e-mail is not guaranteed. Advice should be verified from a mailed or faxed copy, or by other appropriate direct verification means. We operate extensive anti-virus and Internet Security programs but you must take full responsibility for virus checking and Internet Security. Our e-mail communications often involve proprietary information which remains covered by such confidentiality and copyright coverage regardless of transmission. The information contained does not signify any solicitation of investment or advice concerning the quality and/or profitability of such investment or any other guarantee as to risks associated with any qualitative and/or quantitative assumptions made concerning any business opportunity or venture in any way. MQuiz adheres to the highest standards of corporate governance and will not condone any voluntary or involuntary illegal use of proprietary and non-proprietary materials to any criminal or nefarious end; we will prosecute to the fullest extent of international and national laws those that seek to engage into such malevolent use of personal and/or institutional information and communications and we make full use of enforcement capabilities in case of any attempted security breaches of any kind in this respect. M Quiz does not accept any legal or other responsibility or liability for third party use or misuse of its materials, communications, information and all other transmissions. Any wrong recharges or else your net disconnections and all game stopping errors from users end. MQuiz is not responsible for any legal issues. </p>
                <span style="color:red">Other General Legal Disclaimers</span>
                <h3>Advice</h3>
                <p>This website contains general information about some aspects of Mquiz's work as well as contextual information. The information is not advice, and should not be treated as such.</p>
                <span style="color:red">Limitation of warranties</span>
                <p>The information on this website is provided "as is" without any representations or warranties, express or implied. M Quiz makes no representations or warranties in relation to the professional information on this website.</p>
                Without prejudice to the generality of the foregoing paragraph, MQuiz does not warrant that:
                The information on this website will be constantly available, or available at all; or
                The information on this website is complete, true, accurate, up-to-date, or non-misleading.</p>
                <span style="color:red">Professional legal assistance</span>
                <p>You must not rely on the information on this website as an alternative to legal advice from your attorney or other professional legal services provider.
                If you have any specific questions about any legal matter you should consult your attorney or other professional legal services provider.
                You should never delay seeking legal advice, disregard legal advice, or commence or discontinue any legal action because of information on this website.</p>
                <span style="color:red">Liability</span>
                <p>Nothing in this legal disclaimer will limit any of our liabilities in any way that is not permitted under applicable law, or exclude any of our liabilities that may not be excluded under applicable law.
                Your privacy is important to MQUIZ. This privacy statement provides information about the personal information that MQuiz collects, and the ways in which <span style="color:#F7308F">MQUIZ</span>  uses that personal information.</p>

                <h3>Copyright ownership and Intellectual Property Rights</h3>
                <p>The copyright in this website and the material on this website (including without limitation the text, computer code, artwork, photographs, images, music, audio material, video material, audio-visual material and all other materials and components on this website) is owned by MQuiz and its licensors and constitute MQUIZ'S exclusive intellectual property and as such is protected by Intellectual Property Rights.</p>
                <span style="color:red">Copyright license</span>
                <p><span style="color:#03A9F4">MQUIZ</span>  grants to you a worldwide non-exclusive royalty-free revocable license to:
                ONE views this website and the material on this website on a computer or mobile device via a web browser;
                ONE copy and store this website and the material on this website in your web browser cache memory
                ONE and print pages from this website for your own(personal and non-commercial) use.
                MQuiz does not grant you any other rights in relation to this website or the material on this website. In other words, all other rights, including intellectual property rights, are reserved.
                For the avoidance of doubt, you must not adapt, edit, change, transform, publish, republish, distribute, redistribute, broadcast, rebroadcast or show or play in public this website or the material on this website (in any form or media) without MQuiz’s prior written permission.
                The automated and/or systematic collection of data from this website is prohibited.</p>
                <span style="color:red">Permission</span>
                <p>You may request permission to use the copyright materials on this website by writing to mquiz007@gmail.com</p>
                <p><span style="color:red">Enforcement of copyright and intellectual property rights</span></p>
                <p>MQuiz takes the protection of its copyright and all related intellectual property rights very seriously.
                If <span style="color:#F7308F">MQuiz</span> discovers that you have used its copyright materials in contravention of the license above, MQuiz may bring legal proceedings against you seeking monetary damages and an injunction to stop you using those materials. You could also be ordered to pay legal costs.
                If you become aware of any use of MQuiz's copyright materials that contravenes or may contravene the license above, please report this by email to <span style="color: #03A9F4">mquiz007@gmail.com</p>
                <p>"MQuiz" stands and the owner of this website. Use of this website implies consent of the present disclaimer. The content of this website is updated to the best of MQuiz's capacities and reflects information in Mquiz's possession at the time of update. Mquiz is not responsible or liable in any way for any use or misuse of information contained on this website or any other consequence which may result from interactions resulting from consulting this website. Mquiz is not responsible for any third party solicitations made without MQuiz’s consent or knowledge, whether in supposed good faith or nefariously.
                All materials contained in this website are proprietary to MQuiz and can only be used in a private capacity. No dissemination is authorized without the prior express written consent of MQuiz.</p>
                <span style="color:red">Warranties</span>
                <p>This website is provided "as is" without any representations or warranties, express or implied.
                <span style="color:#F7308F">MQuiz</span>  makes no representations or warranties in relation to this website or the information and materials provided on this website.
                Without prejudice to the generality of the foregoing paragraph, MQuiz does not warrant that:
                This website will be constantly available, or available at all; or
                The information on this website is complete, true, accurate or non-misleading.
                Nothing on this website constitutes, or is meant to constitute, advice of any kind. If you require advice in relation to any (legal, financial, personal, business or other) matter you should consult an appropriate professional. MQuiz is at your disposal to provide strategic advisory services in its core fields of competency. </p>   

                <h3>Limitations of liability</h3>
                <p>MQuiz will not be liable to you (whether under the law of contract, the law of torts or otherwise) in relation to the contents of, or use of, or otherwise in connection with, this website:
                 To the extent that the website is provided free-of-charge, for any direct loss;
                 For any indirect, special or consequential loss; or
                 for any business losses, loss of revenue, income, profits or anticipated savings, loss of contracts or business relationships, loss of reputation or goodwill, or loss or corruption of information or data.
                <p>These limitations of liability apply even if MQuiz has been expressly advised of the potential loss.</p>
                Exceptions
                <p>Nothing in this website disclaimer will exclude or limit any warranty implied by law that it would be unlawful to exclude or limit; and nothing in this website disclaimer will exclude or limit MQuiz's liability in respect of any:
                 Death or personal injury caused by negligence;
                 Fraud or fraudulent misrepresentation on the part of Mquiz; or
                 Or matter which it would be illegal or unlawful for MQuiz to exclude or limit, or to attempt or purport to exclude or limit, its liability.</p>
                <h3>Reasonableness</h3>
                <p>By using this website, you agree that the exclusions and limitations of liability set out in this website disclaimer are reasonable.
                If you do not think they are reasonable, you must not use this website.</p>
                <span style="color:red">Other parties</span>
                <p>You accept that, as a limited liability entity, Mquiz has an interest in limiting the personal liability of its officers and employees. You agree that you will not bring any claim personally against Mquiz's officers or employees in respect of any losses you suffer in connection with the website.
                Without prejudice to the foregoing paragraph, you agree that the limitations of warranties and liability set out in this website disclaimer will protect MQuiz's officers, employees, agents, subsidiaries, successors, assigns and sub-contractors as well as MQuiz.</p>
                <span style="color:red">Unenforceable provisions</span>
                <p>If any provision of this website disclaimer is, or is found to be, unenforceable under applicable law, that will not affect the enforceability of the other provisions of this website disclaimer.</p>
                <span style="color:red">Copyright ownership and Intellectual Property Rights</span>
                <p>The copyright in this website and the material on this website (including without limitation the text, computer code, artwork, photographs, images, music, audio material, video material, audio-visual material and all other materials and components on this website) is owned by MQuiz and its licensors and constitute MQuiz's exclusive intellectual property and as such is protected by Intellectual Property Rights.</p>
                <h3>Copyright license</h3>
                <p>MQuiz grants to you a worldwide non-exclusive royalty-free revocable license to:
                View this website and the material on this website on a computer or mobile device via a web browser;
                 Copy and store this website and the material on this website in your web browser cache memory
                 And print pages from this website for your own (personal and non-commercial) use.
                MQuiz does not grant you any other rights in relation to this website or the material on this website. In other words, all other rights, including intellectual property rights, are reserved.</p>
                <p>For the avoidance of doubt, you must not adapt, edit, change, transform, publish, republish, distribute, redistribute, broadcast, rebroadcast or show or play in public this website or the material on this website (in any form or media) without MQuiz's prior written permission.
                The automated and/or systematic collection of data from this website is prohibited.</p>
                <h3>Permission</h3>
                <p>You may request permission to use the copyright materials on this website by writing to<span style="color:#03A9F4"> mquiz007@gmail.com</span></p>
                <p><span style="color:red">Enforcement of copyright and intellectual property rights</span></p>
                <p>MQuiz takes the protection of its copyright and all related intellectual property rights very seriously.
                If MQuiz discovers that you have used its copyright materials in contravention of the license above, MQuiz may bring legal proceedings against you seeking monetary damages and an injunction to stop you using those materials. You could also be ordered to pay legal costs.
                If you become aware of any use of MQuiz's copyright materials that contravenes or may contravene the license above, please report this by email to </p> </p><span style="color:#03A9F4">mquiz007@gmail.com</span></p>
                <span style="color:red">Infringement</span>
                <p>If you become aware of any material on the website that you believe infringes your or any other person's copyright, please report this by email to <span style="color:#03A9F4"> mquiz007@gmail.com </span></p>
                <span style="color:red">Other General Legal Disclaimers</span>
                <h3>Advice</h3>
                <p>This website contains general information about some aspects of MQuiz's work as well as contextual information. The information is not advice, and should not be treated as such.</p>
                <span style="color:red">Professional legal assistance</span>
                <p>You must not rely on the information on this website as an alternative to legal advice from your attorney or other professional legal services provider.
                If you have any specific questions about any legal matter you should consult your attorney or other professional legal services provider.
                You should never delay seeking legal advice, disregard legal advice, or commence or discontinue any legal action because of information on this website.
                Liability</p>
                <p>Nothing in this legal disclaimer will limit any of our liabilities in any way that is not permitted under applicable law, or exclude any of our liabilities that may not be excluded under applicable law.
                Your privacy is important to MQuiz. This privacy statement provides information about the personal information that MQuiz collects, and the ways in which <h3>MQuiz uses that personal information.</h3>
                Contact MQuiz about disclaimers and privacy policy
                If you have any questions about this privacy policy or MQuiz's treatment of your personal information, please write by email to mquiz007@gmail.com</p>

                <h3>General full or extensive disclaimers</h3>
                 <p>1. Contact the sender.</p>
                 <p>2. Delete the material from your computer.</p>
                <h3>JURISDICTION AT  VISAKHAPTNAM ONLY</h3>
                <p>3. Confidential
                This message is confidential. It may also be privileged or otherwise protected by work product immunity or other legal rules. If you have received it by mistake, please let us know by e-mail reply and delete it from your system; you may not copy this message or disclose its contents to anyone. Please send us by fax any message containing deadlines as incoming e-mail are not screened for response deadlines. The integrity and security of this message cannot be guaranteed on the Internet.</p>
                 <h3>Possible transmission of viruses</h3>
                <span style="color:red">1. Complete</span>
                <p><b>WARNING:</b> Computer viruses can be transmitted via e-mail/chatting /postings. The recipient should check this e-mail/postings /chattings and any attachments for the presence of viruses. The MQuiz accepts no liability for any damage caused by any virus transmitted by these transmissions. Content transmission cannot be guaranteed to be secure or error-free as information could be intercepted, corrupted, lost, destroyed, arrive late, be incomplete, or contain viruses. The sender therefore does not accept liability for any errors or omissions in the contents of this message, which arise as a result of transmission.</p>
                <span style="color:red">2. Brief</span>
                Warning: Although the MQuiz has taken reasonable precautions to ensure no viruses are present in these transmissions, the MQuiz cannot accept responsibility for any loss or damage arising from the use of this e-mail or attachments.</p>
            </div>
        </div>       
    </div>				
		<!--============  footer  ===============-->
<?php 
  $this->load->view('footer');
?>