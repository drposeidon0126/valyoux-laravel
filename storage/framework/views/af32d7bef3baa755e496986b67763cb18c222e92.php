<?php $__env->startSection('pageCSS'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?> Artist <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<style>

    .revenue-main-wrapper{
        
    }
    .revenue-col{
        
    }
    .main-head-wrapper{
        color: #0A0A0A;
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-weight: 600;
        margin: 0 0 60px 0;
        font-size: 34px;
        flex-wrap: wrap;
    }
    .main-head-wrapper span{
        
    }
    .revenue-col h4{
        color: #0A0A0A;
        font-size: 26px;
        font-weight: 600;
        margin: 100px 0 50px 0;
    }
    .single-row-revenue{
        margin-bottom: 35px;
    }
    .single-row-revenue h5{
        color: #0A0A0A;
        font-size: 26px;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
        flex-wrap: wrap;
    }
    .single-row-revenue h5 span{
        
    }
    .single-row-revenue p{
        color: #707070;
        font-size: 18px;
        margin-bottom: 10px;
    }
    @media (max-width: 575px){
        .main-head-wrapper {
            margin: 0 0 30px 0;
            font-size: 20px;
        }
        .revenue-col h4 {
            font-size: 20px;
            margin: 60px 0 50px 0;
        }
        .single-row-revenue h5{
            font-size: 14px;
        }
        .single-row-revenue p{
            font-size: 14px;
        }
        .revenue-main-wrapper .container{
            padding: 0;
        }
        .revenue-main-wrapper .container .col-12{
            padding: 0;
        }
    }
</style>
     
            <?php echo $__env->make('layouts.inner-navigation',['artist'=>$artist], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
<div class="row">
         <?php echo $__env->make('layouts.profile-box',['artist'=>$artist], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     </div>
     <div class="page_section">
     <div class="revenue-main-wrapper mt-5">
    <div class="container">
	
            <div class="col-12 revenue-col">
              <h2 class="main-head-wrapper">
                <span>TOTAL REVENUE GENERATED</span>
                <span>$ 10,000,567.85</span>
              </h2>
              <h4>SONG WRITING & COMPOSING REVENUE</h4>
              <div class="single-row-revenue">
                <h5>
                  <span>Publisher Advance payment </span>
                  <span>$0.00000000</span>
                </h5>
                <p>Payments to songwriter / composer as part of a publishing deal. Paid to songwriter/composer by publishing company.</p>
              </div>
              <div class="single-row-revenue">
                <h5>
                  <span>Mechanical Royalties</span>
                  <span>$0.00000000</span>
                </h5>
                <p>Royalties generated through the reproduction of recordings of your songs – either physical or digital. Paid to songwriter / composer by publisher, label, Harry Fox, or digital aggregator like CD Baby/TuneCore.</p>
              </div>
        
              <div class="single-row-revenue">
                <h5>
                  <span>Commissions</span>
                  <span>$0.00000000</span>
                </h5>
                <p>Typically a request from an ensemble, presenter, orchestra or other entity for a composer to create an original work for them.</p>
              </div>
              
              <div class="single-row-revenue">
                <h5>
                  <span>Public Performance (PRO) Royalties </span>
                  <span>$0.00000000</span>
                </h5>
                <p>Royalties generated when your songs are played on radio, TV, in clubs and restaurants. Paid to songwriter/composer/publisher by ASCAP/BMI/SESAC.</p>
              </div>
              
              <div class="single-row-revenue">
                <h5>
                  <span>Streaming Mechanical Royalties</span>
                  <span>$0.00000000</span>
                </h5>
                <p>Royalties generated when your songs are streamed on on-demand services (Rhapsody, Spotify, Rdio). Paid to publisher by Harry Fox or other mechanical licensing agent. Publisher then pays songwriter/composer.</p>
              </div>
              
              <div class="single-row-revenue">
                <h5>
                  <span>Composing Original Works for Broadcast </span>
                  <span>$0.00000000</span>
                </h5>
                <p>Typically a commercial request to compose an *original* jingle, soundtrack, score, or other musical work for a film, TV or cable show, or an ad agency. Paid to songwriter/composer by agency requesting the work.</p>
              </div>
              
              <div class="single-row-revenue">
                <h5>
                  <span>Synch Licenses </span>
                  <span>$0.00000000</span>
                </h5>
                <p>Typically involves licensing an *existing* work for use in a movie, documentary, TV, video games, internet, or a commercial. Paid to songwriters/composers either via publisher or record label, or via a direct licensing deal with the licensee (movie studio, ad agency, etc) if you are self- published.
                </p>
              </div>
              
              <div class="single-row-revenue">
                <h5>
                  <span>Sheet Music Sales</span>
                  <span>$0.00000000</span>
                </h5>
                <p>Revenue generated by the sale or licensed reproduction of songs/compositions as sheet music. Paid to songwriter/composer by publisher, or directly from purchasers if you are selling it on your website or at performances.</p>
              </div>
              
              <div class="single-row-revenue">
                <h5>
                  <span>Lyric Display</span>
                  <span>$0.00000000</span>
                </h5>
                <p>Revenue generated by the licensed display of song lyrics. Online lyric sites pay publishers, which then pay songwriter/composer.
                </p>
              </div>
              
              <div class="single-row-revenue">
                <h5>
                  <span>Ringtones</span>
                  <span>$0.00000000</span>
                </h5>
                <p>Revenue generated from licensing your songs/compositions for use as ringtones. Paid to songwriter/composer via your publisher, your label or Harry Fox.</p>
              </div>
              
              <div class="single-row-revenue">
                <h5>
                  <span>Songwriter Awards Programs</span>
                  <span>$0.00000000</span>
                </h5>
                <p>Awards given by ASCAP and BMI Foundations to writer members of any genre whose performances are primarily in venues outside of broadcast media.        </p>
              </div>
              
              <div class="single-row-revenue">
                <h5>
                  <span>Publisher Settlement </span>
                  <span>$0.00000000</span>
                </h5>
                <p>Payment from publishers to writers for litigation settlements.</p>
              </div>
        
              <h4>RECORDING ARTIST REVENUE</h4>
              <div class="single-row-revenue">
                <h5>
                  <span>Record Label Advance </span>
                  <span>$0.00000000</span>
                </h5>
                <p>Paid to recording artist as part of signing a deal.</p>
              </div>
              
              <div class="single-row-revenue">
                <h5>
                  <span>Record Label Support</span>
                  <span>$0.00000000</span>
                </h5>
                <p>Money from label for recording or tour support.</p>
              </div>
              
              <div class="single-row-revenue">
                <h5>
                  <span>Retail Sales</span>
                  <span>$0.00000000</span>
                </h5>
                <p>Revenue generated from selling physical recordings in retail stores or via mailorder. Paid to recording artist/performer by your label, or services like CD Baby or Bandcamp that help musicians sell physical product.
                </p>
              </div>
              
              <div class="single-row-revenue">
                <h5>
                  <span>Digital Sales</span>
                  <span>$0.00000000</span>
                </h5>
                <p>Revenue generated from selling recordings digitally/online as permanent downloads. Paid to recording artist/performer by your label, or digital aggregator like CD Baby or TuneCore, or directly from fans via services like Bandcamp.
                </p>
              </div>
              
              <div class="single-row-revenue">
                <h5>
                  <span>Sales at Shows</span>
                  <span>$0.00000000</span>
                </h5>
                <p>Revenue generated from selling recordings at shows/live performances. Paid to recording artist/performer directly by fans.</p>
              </div>
              
              <div class="single-row-revenue">
                <h5>
                  <span>Interactive Service Payments </span>
                  <span>$0.00000000</span>
                </h5>
                <p>Revenue generated when your recordings are streamed on on-demand services (Rhapsody, Spotify, Rdio). Paid to recording artist/performer by your label, or digital aggregator like CD Baby or TuneCore.
                </p>
              </div>
              
              <div class="single-row-revenue">
                <h5>
                  <span>Digital Performance Royalties</span>
                  <span>$0.00000000</span>
                </h5>
                <p>Revenue generated when your sound recordings are played on internet radio, Sirius XM, Pandora. Paid to performers by SoundExchange.</p>
              </div>
              
              <div class="single-row-revenue">
                <h5>
                  <span>Master Use Synch Licenses</span>
                  <span>$0.00000000</span>
                </h5>
                <p>ypically involves licensing an *existing* sound recording for use in a movie, documentary, TV, video games, internet, or a commercial. License fee paid to record label and/or recording artist via a direct licensing deal with the licensee (movie studio, ad agency, etc).</p>
              </div>
              
              <div class="single-row-revenue">
                <h5>
                  <span>AARC Royalties</span>
                  <span>$0.00000000</span>
                </h5>
                <p>Collected for the foreign performance of your recordings.</p>
              </div>
              
              <div class="single-row-revenue">
                <h5>
                  <span>Neighboring Rights Royalties </span>
                  <span>$0.00000000</span>
                </h5>
                <p>Payments to songwriter / composer as part of a publishing deal. Paid to songwriter/composer by publishing company.</p>
              </div>
              
              <div class="single-row-revenue">
                <h5>
                  <span>Film Musicians Secondary Markets Fund </span>
                  <span>$0.00000000</span>
                </h5>
                <p>Paid to performers on recordings used in film, TV and other secondary uses by the Film Musicians’ Secondary Markets Fund.</p>
              </div>
              
              <div class="single-row-revenue">
                <h5>
                  <span>Sound Recording Special Payments Fund </span>
                  <span>$0.00000000</span>
                </h5>
                <p>Paid to performers for the sales of music recorded under AFM collective bargaining agreement by the Sound Recordings Special Payments Fund.
                </p>
              </div>
              
              <div class="single-row-revenue">
                <h5>
                  <span>SAG-AFTRA Contingent Scale Payments</span>
                  <span>$0.00000000</span>
                </h5>
                <p>Paid to non-royalty artists when a recording hits certain sales plateaus.</p>
              </div>
              
              <div class="single-row-revenue">
                <h5>
                  <span>Label Settlements</span>
                  <span>$0.00000000</span>
                </h5>
                <p>Payments from labels to recording artists for litigation settlements (MP3.com, Limewire).</p>
              </div>
        
              <h4>PERFORMANCE REVENUE</h4>
        
              <div class="single-row-revenue">
                <h5>
                  <span>Salary as Member of Orchestra or Ensemble</span>
                  <span>$0.00000000</span>
                </h5>
                <p> Income earned as a salaried member of an orchestra band, or ensemble.</p>
              </div>
              
              <div class="single-row-revenue">
                <h5>
                  <span>Shows/Performance Fees</span>
                  <span>$0.00000000</span>
                </h5>
                <p>Revenue generated from playing in a live setting (for non-salaried players). Paid by concert promoter, presenter or venue to performer.</p>
              </div>
              
              <div class="single-row-revenue">
                <h5>
                  <span>Session Musician/Sideman Fees for Studio Work </span>
                  <span>$0.00000000</span>
                </h5>
                <p>Payments to studio musicians/freelancers/</p>
              </div>
              
              <div class="single-row-revenue">
                <h5>
                  <span>Session Musician/Sideman Fees for Live Work </span>
                  <span>$0.00000000</span>
                </h5>
                <p>Payments to studio musicians/freelancers/sideman for work in a live setting/on tour. Paid by label, producer or artist, depending on situation.
                </p>
              </div>
              
              <div class="single-row-revenue">
                <h5>
                  <span>Non-Featured Artist Payments</span>
                  <span>$0.00000000</span>
                </h5>
                <p>Payments from the AFM & SAG-AFTRA Intellectual Property Rights Distribution Fund, which distributes recording and performance royalties to non-featured artists.</p>
              </div>
        
              <h4>TEACHING & PRODUCING</h4>
        
              <div class="single-row-revenue">
                <h5>
                  <span>Music Teacher</span>
                  <span>$0.00000000</span>
                </h5>
                <p> Revenue generated from teaching your musical craft.</p>
              </div>
        
              <div class="single-row-revenue">
                <h5>
                  <span>Producer</span>
                  <span>$0.00000000</span>
                </h5>
                <p>Payment for producing another artists’ work in the studio or in a live setting. Paid by labels,
                  featured artists, studios, presenters, or foundations, depending on situation.</p>
              </div>
        
              <div class="single-row-revenue">
                <h5>
                  <span>Honoraria or Speakers’ Fees</span>
                  <span>$0.00000000</span>
                </h5>
                <p>Payment for conducting a lecture, workshop or master class. Usually paid by school, conservatory, or presenting organization.</p>
              </div>
        
              <h4>BRAND RELATED REVENUE</h4>
              
              <div class="single-row-revenue">
                <h5>
                  <span>Merchandise Sales</span>
                  <span>$0.00000000</span>
                </h5>
                <p>Revenue generated from selling branded merchandise (t-shirts, hoodies, posters, etc.). Paid to artist/performer by fans.</p>
              </div>
        
              <div class="single-row-revenue">
                <h5>
                  <span>Fan Club</span>
                  <span>$0.00000000</span>
                </h5>
                <p>Money directly from fans who are subscribing to your fan club.</p>
              </div>
        
              <div class="single-row-revenue">
                <h5>
                  <span>YouTube Partner Program</span>
                  <span>$0.00000000</span>
                </h5>
                <p>Shared advertising revenue, paid to partners by YouTube.</p>
              </div>
        
              <div class="single-row-revenue">
                <h5>
                  <span>Ad Revenue </span>
                  <span>$0.00000000</span>
                </h5>
                <p>Miscellaneous income generated by your website properties (click-thrus, commissions on Amazon sales, etc.)</p>
              </div>
        
              <div class="single-row-revenue">
                <h5>
                  <span>Persona Licensing</span>
                  <span>$0.00000000</span>
                </h5>
                <p>Payments from a brand that is licensing your name or likeness (video games, comic books).        </p>
              </div>
        
              <div class="single-row-revenue">
                <h5>
                  <span>Product Endorsements </span>
                  <span>$0.00000000</span>
                </h5>
                <p>Payments or free goods from a brand for you endorsing or using their product.        </p>
              </div>
        
              <div class="single-row-revenue">
                <h5>
                  <span>Acting</span>
                  <span>$0.00000000</span>
                </h5>
                <p>Payments for appearances in TV, commercials, movies.</p>
              </div>
        
              <h4>FAN, CORPORATE AND FOUNDATION FUNDING and OTHER SOURCES OF REVENUE</h4>
              
              <div class="single-row-revenue">
                <h5>
                  <span>Fan Funding</span>
                  <span>$0.00000000</span>
                </h5>
                <p>Money directly from fans to support or pre-sell an upcoming recording project or tour (Kickstarter, Pledge Music, IndieGogo).</p>
              </div>
              
              <div class="single-row-revenue">
                <h5>
                  <span>Sponsorship</span>
                  <span>$0.00000000</span>
                </h5>
                <p>Corporate support for a tour, or for your band/ensemble.</p>
              </div>
              
              <div class="single-row-revenue">
                <h5>
                  <span>Grants</span>
                  <span>$0.00000000</span>
                </h5>
                <p>Foundation or public arts grants to support your work/project from foundations, state or federal
                  agencies.</p>
              </div>
              
              <div class="single-row-revenue">
                <h5>
                  <span>Arts Administrator</span>
                  <span>$0.00000000</span>
                </h5>
                <p>Money paid to you specifically for managing the administrative aspects of a group that you are a member of.</p>
              </div>
        
          </div>
     
    </div>
</div>

</div>

<div class="row bs-float-parent">
        <?php echo $__env->make('layouts.stock-price',['artist'=>$artist], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?> 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/testvps-main/resources/views/artist/invite.blade.php ENDPATH**/ ?>