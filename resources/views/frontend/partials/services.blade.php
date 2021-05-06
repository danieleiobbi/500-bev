<section id="services">
    <div class="container">
        <div id="accordion-footer" class="accordion">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6 col-xl-4">
                    <div class="card">
                        <div class="card-header" id="heading-01">
                            <h3 class="mb-0">
                                <a class="btn btn-link collapsed pl-4" data-toggle="collapse" data-target="#AF01" aria-expanded="true" aria-controls="collapseOne">
                                    {!! _i("CIAO FIAT CUSTOMER CARE") !!}
                                </a>
                            </h3>
                        </div>
                        
                        <div id="AF01" class="collapse" aria-labelledby="heading-01" data-parent="#accordion-footer">
                            <div class="card-body small">
                                <img class="w-50 mb-5" src="{{ asset('images/logos/ciaofiat.svg') }}">
                                <div>
                                    {!! _i("You can contact Fiat by calling the dedicated Toll Free Number 0080034280000* reachable from most European countries. We are at your disposal to provide Road Assistance services, active 365 days a year, 24 hours a day. By contacting Fiat Customer Care you can also request info on our models, services, dealer network and, lastly, book a test drive on a vehicle of your choice. Fiat is at your disposal to satisfy every necessity or request linked to the use of your vehicle or our assistances services.") !!}
                                </div>
                                <div class="small">
                                    {!! _i("*Remember to check the call costs with your phone provider when calling from abroad or mobile phones.") !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="heading-02">
                            <h3 class="mb-0">
                                <a class="btn btn-link collapsed pl-4" data-toggle="collapse" data-target="#AF02" aria-expanded="true" aria-controls="collapseOne">
                                    {!! _i("FLEET & BUSINESS") !!}
                                </a>
                            </h3>
                        </div>
                        
                        <div id="AF02" class="collapse" aria-labelledby="heading-02" data-parent="#accordion-footer">
                            <div class="card-body small">
                                <img class="w-50 mb-5" src="{{ asset('images/logos/FCA-FleetBusiness.svg') }}">
                                <div>
                                    {!! _i("FCA Fleet & Business is the division that responds to all business customer needs, including self-employees, small and medium enterprises and large companies. Through our partners, we provide our business customers with dedicated financial products for leasing, contract hire or purchasing, and tailored after-sales services, such as scheduled service plans and warranty extensions.") !!} 
                                    @if (session()->get('source') !== request()->get('source_iLinkEco'))
                                        <a href="{!! _i("//www.fiat.it/leasing")!!}" target="_blank">{!! _i("fiat.it/leasing") !!}</a>
                                    @else
                                        {!! _i("fiat.it/leasing") !!}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="heading-03">
                            <h3 class="mb-0">
                                <a class="btn btn-link collapsed pl-4" data-toggle="collapse" data-target="#AF03" aria-expanded="true" aria-controls="collapseOne">
                                    <span>{!! _i("MOPAR<sub>®</sub> VEHICLE PROTECTION") !!}</span>
                                </a>
                            </h3>
                        </div>
                        
                        <div id="AF03" class="collapse" aria-labelledby="heading-03" data-parent="#accordion-footer">
                            <div class="card-body small">
                                <img class="w-50 mb-5" src="{{ asset('images/logos/Mopar-VP.svg') }}">
                                <div>
                                    {!! _i("Block the cost of future repairs and services with Mopar<sub>®</sub> Vehicle Protections extended warranty and maintenance plans. The right mix of expertise, value and convenience.") !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(LaravelGettext::getLocale() !== 'it_CH' && LaravelGettext::getLocale() !== 'fr_CH' && LaravelGettext::getLocale() !== 'de_CH')
                    <div class="card">
                        <div class="card-header" id="heading-04b">
                            <h3 class="mb-0">
                                <a class="btn btn-link collapsed pl-4" data-toggle="collapse" data-target="#L04b" aria-expanded="true" aria-controls="collapseOne">
                                    {!! _i("LEASYS") !!}
                                </a>
                            </h3>
                        </div>
                        
                        <div id="L04b" class="collapse" aria-labelledby="heading-04b" data-parent="#accordion-footer">
                            <div class="card-body small">
                                <div>
                                    <img class="w-25 mb-5" src="{{ asset('images/logos/leasys.svg') }}">
                                    <p>{!! _i("Leasys offers rental and mobility services for individuals, professionals and companies of all size and public administrations: from short-and-medium term rental, long term to car sharing, and from subscription to fleet management, up to the online sale of used end-of-lease cars. Leasys is an all-round mobility operator offering flexible and digital solutions.") !!}<p>
                                    <p>{!! _i("For those who wish to drive the New Fiat 500 and enjoy the experience without thinking at the car management it is possible to rent the new 500 with Leasys Miles, the pay-per-use offer. Thanks to this innovative formula, Leasys responds to the needs of those who use the car mainly around the city and have a low annual mileage. Leasys Miles has a duration of 48 months, has no down payment and it is characterized by an advantageous monthly fee, to which is added a variable fee calculated on the basis of the kilometers actually travelled. The first 1,000 kms are already included in the fee. It is also possible to enrich the basic rental with additional assistance services and insurance coverages to enjoy the car and its use truly with no worries.") !!}<p>
                                    <p>{!! _i("For those who, instead, will choose to buy the New Fiat 500, Leasys have created My Dream Garage: a virtual garage, 100% digital, simply managed through your smartphone that allows driving the most iconic FCA’s House of Brands Vehicles.") !!}<p>
                                    @if (session()->get('source') !== request()->get('source_iLinkEco'))
                                        <p>{!! _i("To more details, please consult") !!} <a href="{!! _i("//www.leasys.com") !!}" target='_blank'>{!! _i("leasys.com") !!}</a><p>
                                    @else
                                        <p>{!! _i("To more details, please consult") !!} {!! _i("leasys.com") !!}<p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    <div class="card">
                        <div class="card-header" id="heading-04">
                            <h3 class="mb-0">
                                <a class="btn btn-link collapsed pl-4" data-toggle="collapse" data-target="#AF04" aria-expanded="true" aria-controls="collapseOne">
                                    {!! _i("FINANCE PACKAGES<br>AND INSURANCE SERVICES") !!}
                                </a>
                            </h3>
                        </div>
                        
                        <div id="AF04" class="collapse" aria-labelledby="heading-04" data-parent="#accordion-footer">
                            <div class="card-body small">
                                <img class="w-50 mb-5" src="{{ asset('images/logos/FCA-BANK.png') }}">
                                <div>
                                    <p>{!! _i("FCA Bank is the digital bank dedicated to motorists specialized in the car financing. Whether you are a private customer, professionals or run your own business, FCA BANK offers you the best and most flexible financial solutions to facilitate your purchase of the New Fiat 500 so that you can drive it away. With FCA Bank, you can combine your finance with high value-added insurance services tailored to meet your requirements: fire and theft, collision and fully comprehensive insurance, extended warranty, and windscreen or vehicle security marking. For those who want to buy the New 500, FCA Bank has created Go Easy, a new financial solution dedicated, which will be available in all Europe. It is a PCP with a low monthly payment and the guaranteed future of the car. The financing solution which makes it possible to have always a new vehicle, paying just for the effective use, with a broad range of options available at contract expiration including, but not limited to, replacement of vehicle by purchasing a new one, keeping the vehicle by repaying or refinancing the final instalment, returning the vehicle without the obligation to purchase a new one.") !!}</p>
                                    @if (session()->get('source') !== request()->get('source_iLinkEco'))
                                        <p>{!! _i("For full details, please visit") !!} <a href="{!! _i("//www.fcabankgroup.com/") !!}" target='_blank'>{!! _i("fcabankgroup.com") !!}</a></p>
                                    @else
                                        <p>{!! _i("For full details, please visit") !!} {!! _i("fcabankgroup.com") !!}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 col-xl-4">
                    <div class="card">
                        <div class="card-header" id="heading-05">
                            <h3 class="mb-0">
                                <a class="btn btn-link collapsed pl-4" data-toggle="collapse" data-target="#AF05" aria-expanded="true" aria-controls="collapseOne">
                                    {!! _i("WEB") !!}
                                </a>
                            </h3>
                        </div>
                        
                        <div id="AF05" class="collapse" aria-labelledby="heading-05" data-parent="#accordion-footer">
                            <div class="card-body small">
                                <img class="w-25 mb-3" src="{{ asset('images/logos/MyFiat.svg') }}">
                                <div>
                                    {!! _i("Take care of your car in one click! Go to my.fiat.com and discover a world of dedicated services: safe maintenance, reminders and customized promotions.") !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="heading-06">
                            <h3 class="mb-0">
                                <a class="btn btn-link collapsed pl-4" data-toggle="collapse" data-target="#AF06" aria-expanded="true" aria-controls="collapseOne">
                                    <span>{!! _i("MOPAR<sub>®</sub> E-STORE ") !!}</span>
                                </a>
                            </h3>
                        </div>
                        
                        <div id="AF06" class="collapse" aria-labelledby="heading-06" data-parent="#accordion-footer">
                            <div class="card-body small">
                                <img class="logo-fiat-commerce mb-3 w-50" src="{{ asset('images/logos/Mopar-estore.svg') }}">
                                <div>
                                    @if (session()->get('source') !== request()->get('source_iLinkEco'))
                                        {!! _i("The official store for accessories, parts and services for FCA vehicles.") !!} <a href="{!! _i("//moparstore.it") !!}" target='_blank'>{!! _i("moparstore.it") !!}</a>
                                    @else
                                        {!! _i("The official store for accessories, parts and services for FCA vehicles.") !!} {!! _i("moparstore.it") !!}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="heading-07">
                            <h3 class="mb-0">
                                <a class="btn btn-link collapsed pl-4" data-toggle="collapse" data-target="#AF07" aria-expanded="true" aria-controls="collapseOne">
                                    {!! _i("Uconnect™") !!}
                                </a>
                            </h3>
                        </div>
                        
                        <div id="AF07" class="collapse" aria-labelledby="heading-07" data-parent="#accordion-footer">
                            <div class="card-body small">
                                <img class="w-50 mb-5" src="{{ asset('images/logos/uconnect.png') }}">
                                <div>
                                    <p>{!! _i("The new electric 500 is equipped with a complete range of Connected Services, both on board and outside, including a new smartphone app. With the FIAT app you will be able to manage the New electric 500 from anywhere and whenever you want. Discover all the features, download FIAT Mobile App and enjoy!") !!}</p>
                                    <p>{!! _i("Using My Uconnect.fiat web portal you will always be updated on your activated Uconnect™ Services and you can purchase and manage optional packages and renewals.") !!}</p>
                                    <p>{!! _i("Moreover, Uconnect™ Box enables a set of additional services, also specific for Fleet and Large Account, and gives the opportunity to access insurance benefits of the latest Pay-As-You-Drive and Pay-How-You-Drive car insurance policies.") !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="heading-08">
                            <h3 class="mb-0">
                                <a class="btn btn-link collapsed pl-4" data-toggle="collapse" data-target="#AF08" aria-expanded="true" aria-controls="collapseOne">
                                    <span>{!! _i("MOPAR<sub>®</sub> FLEET & BUSINESS SOLUTIONS<br>AND AFTERSALES SERVICES") !!}</span>
                                </a>
                            </h3>
                        </div>
                        
                        <div id="AF08" class="collapse" aria-labelledby="heading-08" data-parent="#accordion-footer">
                            <div class="card-body small">
                                <p class="font-weight-bold">{!! _i("DISCOVER THE DEDICATED AFTERSALES SERVICES DESIGNED TO SUPPORT YOU AND YOUR BUSINESS.") !!}</p>
                                <p>{!! _i("Mopar Fleet&Business services offers you perfect solutions that optimize your business activities and give you privileged services reducing you vehicles’ downtime. Our set of services provides a range of special benefits to help with your vehicle needs, making servicing manageable for all our Fleet&Business customers, as well as making sure that you enjoy a consistent, helpful and worry-free experience whenever you’re in contact with us.") !!}</p>
                                <p class="font-weight-bold">{!! _i("PRE-PAID TAILORMADE SERVICE CONTRACTS") !!}</p>
                                <p>{!! _i("Subscribe to any of the tailored plans offered to Mopar Vehicle Protection, to help you maintain your business vehicle in tip-top condition.") !!}</p>
                                <p class="font-weight-bold">{!! _i("PAY-PER-USE SERVICE CONTRACTS") !!}</p>
                                <p>{!! _i("Our customers stipulates a contract which determines lower rates and predefined discounts: a single monthly invoicing service for the entire fleet car parc.") !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>