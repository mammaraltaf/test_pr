@extends('layouts.admin.app')
@section('pageTitle') Profile Settings @endsection

@section('content')
    <!--begin::Navbar-->
    <div class="card mb-5 mb-xl-10">
        <div class="card-body pt-9 pb-0">
            <!--begin::Navs-->
            <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a id="overview" class="nav-link text-active-primary ms-0 me-10 py-5 active" href="#">Overview</a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a id="setting" class="nav-link text-active-primary ms-0 me-10 py-5" href="#">Settings</a>
                </li>
                <!--end::Nav item-->
            </ul>
            <!--begin::Navs-->
        </div>
    </div>
    <!--end::Navbar-->
    <!--begin::details View-->
    <div id="overview_div" class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header cursor-pointer">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Profile Details</h3>
            </div>
            <!--end::Card title-->
            <!--begin::Action-->
{{--            <a href="{{route('user.profileSetting')}}" class="btn btn-primary align-self-center">Edit Profile</a>--}}
            <!--end::Action-->
        </div>
        <!--begin::Card header-->
        <!--begin::Card body-->
        <div class="card-body p-9">
            <!--begin::Row-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-bold text-muted">Full Name</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-gray-800">{{auth()->user()->name}}</span>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Input group-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-bold text-muted">Email</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <span class="fw-bold text-gray-800 fs-6">{{auth()->user()->email}}</span>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-bold text-muted">Country
                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i></label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-gray-800">{{auth()->user()->country}}</span>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-bold text-muted">Timezone</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-gray-800">{{auth()->user()->timezone}}</span>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::details View-->
    <!--begin::Basic info-->
    <div id="setting_div" class="card mb-5 mb-xl-10 d-none">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Profile Settings</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->
        <!--begin::Content-->
        <div id="kt_account_settings_profile_details" class="collapse show">
            <!--begin::Form-->
            <form id="edit-user-form" action="" method="POST">
                @csrf
                <!--begin::Card body-->
                <div class="card-body border-top p-9">
                    <!--begin::Input group-->
                    {{--                    <div class="row mb-6">--}}
                    {{--                        <!--begin::Label-->--}}
                    {{--                        <label class="col-lg-4 col-form-label fw-bold fs-6">Avatar</label>--}}
                    {{--                        <!--end::Label-->--}}
                    {{--                        <!--begin::Col-->--}}
                    {{--                        <div class="col-lg-8">--}}
                    {{--                            <!--begin::Image input-->--}}
                    {{--                            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('{{asset('assets/media/svg/avatars/blank.svg')}}')">--}}
                    {{--                                <!--begin::Preview existing avatar-->--}}
                    {{--                                <div class="image-input-wrapper w-125px h-125px" style="background-image: url('{{asset('assets/media/avatars/300-1.jpg')}}')"></div>--}}
                    {{--                                <!--end::Preview existing avatar-->--}}
                    {{--                                <!--begin::Label-->--}}
                    {{--                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">--}}
                    {{--                                    <i class="bi bi-pencil-fill fs-7"></i>--}}
                    {{--                                    <!--begin::Inputs-->--}}
                    {{--                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />--}}
                    {{--                                    <input type="hidden" name="avatar_remove" />--}}
                    {{--                                    <!--end::Inputs-->--}}
                    {{--                                </label>--}}
                    {{--                                <!--end::Label-->--}}
                    {{--                                <!--begin::Cancel-->--}}
                    {{--                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">--}}
                    {{--																<i class="bi bi-x fs-2"></i>--}}
                    {{--															</span>--}}
                    {{--                                <!--end::Cancel-->--}}
                    {{--                                <!--begin::Remove-->--}}
                    {{--                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">--}}
                    {{--																<i class="bi bi-x fs-2"></i>--}}
                    {{--															</span>--}}
                    {{--                                <!--end::Remove-->--}}
                    {{--                            </div>--}}
                    {{--                            <!--end::Image input-->--}}
                    {{--                            <!--begin::Hint-->--}}
                    {{--                            <div class="form-text">Allowed file types: png, jpg, jpeg.</div>--}}
                    {{--                            <!--end::Hint-->--}}
                    {{--                        </div>--}}
                    {{--                        <!--end::Col-->--}}
                    {{--                    </div>--}}
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Full Name</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg-12 fv-row">
                                    <input type="text" name="name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Full name" value="{{auth()->user()->name}}" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Email</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="email" name="email" class="form-control form-control-lg form-control-solid" placeholder="Email" value="{{auth()->user()->email}}" />
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                            <span class="required">Country</span>
                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of living"></i>
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a country..." class="form-select form-select-solid form-select-lg fw-bold">
                                <option value="">Select a Country...</option>
                                <option data-kt-flag="flags/afghanistan.svg" value="Afghanistan">Afghanistan</option>
                                <option data-kt-flag="flags/aland-islands.svg" value="Alaslands Islands">Aland Islands</option>
                                <option data-kt-flag="flags/albania.svg" value="Albania">Albania</option>
                                <option data-kt-flag="flags/algeria.svg" value="Algeria">Algeria</option>
                                <option data-kt-flag="flags/american-samoa.svg" value="American Samoa">American Samoa</option>
                                <option data-kt-flag="flags/andorra.svg" value="Andorra">Andorra</option>
                                <option data-kt-flag="flags/angola.svg" value="Angola">Angola</option>
                                <option data-kt-flag="flags/anguilla.svg" value="Anguilla">Anguilla</option>
                                <option data-kt-flag="flags/antigua-and-barbuda.svg" value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option data-kt-flag="flags/argentina.svg" value="Argentina">Argentina</option>
                                <option data-kt-flag="flags/armenia.svg" value="Armenia">Armenia</option>
                                <option data-kt-flag="flags/aruba.svg" value="Aruba">Aruba</option>
                                <option data-kt-flag="flags/australia.svg" value="Australia">Australia</option>
                                <option data-kt-flag="flags/austria.svg" value="Austria">Austria</option>
                                <option data-kt-flag="flags/azerbaijan.svg" value="Azerbaijan">Azerbaijan</option>
                                <option data-kt-flag="flags/bahamas.svg" value="Bahamas">Bahamas</option>
                                <option data-kt-flag="flags/bahrain.svg" value="Bahrain">Bahrain</option>
                                <option data-kt-flag="flags/bangladesh.svg" value="Bangladesh">Bangladesh</option>
                                <option data-kt-flag="flags/barbados.svg" value="Barbados">Barbados</option>
                                <option data-kt-flag="flags/belarus.svg" value="Belarus">Belarus</option>
                                <option data-kt-flag="flags/belgium.svg" value="Belgium">Belgium</option>
                                <option data-kt-flag="flags/belize.svg" value="Belize">Belize</option>
                                <option data-kt-flag="flags/benin.svg" value="Benin">Benin</option>
                                <option data-kt-flag="flags/bermuda.svg" value="Bermuda">Bermuda</option>
                                <option data-kt-flag="flags/bhutan.svg" value="Bhutan">Bhutan</option>
                                <option data-kt-flag="flags/bolivia.svg" value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
                                <option data-kt-flag="flags/bonaire.svg" value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                                <option data-kt-flag="flags/bosnia-and-herzegovina.svg" value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option data-kt-flag="flags/botswana.svg" value="Botswana">Botswana</option>
                                <option data-kt-flag="flags/brazil.svg" value="Brazil">Brazil</option>
                                <option data-kt-flag="flags/british-indian-ocean-territory.svg" value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option data-kt-flag="flags/brunei.svg" value="Brunei Darussalam">Brunei Darussalam</option>
                                <option data-kt-flag="flags/bulgaria.svg" value="Bulgaria">Bulgaria</option>
                                <option data-kt-flag="flags/burkina-faso.svg" value="Burkina Faso">Burkina Faso</option>
                                <option data-kt-flag="flags/burundi.svg" value="Burundi">Burundi</option>
                                <option data-kt-flag="flags/cambodia.svg" value="Cambodia">Cambodia</option>
                                <option data-kt-flag="flags/cameroon.svg" value="Cameroon">Cameroon</option>
                                <option data-kt-flag="flags/canada.svg" value="Canada">Canada</option>
                                <option data-kt-flag="flags/cape-verde.svg" value="Cape Verde">Cape Verde</option>
                                <option data-kt-flag="flags/cayman-islands.svg" value="Cayman Islands">Cayman Islands</option>
                                <option data-kt-flag="flags/central-african-republic.svg" value="Central African Republic">Central African Republic</option>
                                <option data-kt-flag="flags/chad.svg" value="Chad">Chad</option>
                                <option data-kt-flag="flags/chile.svg" value="Chile">Chile</option>
                                <option data-kt-flag="flags/china.svg" value="China">China</option>
                                <option data-kt-flag="flags/christmas-island.svg" value="Christmas Island">Christmas Island</option>
                                <option data-kt-flag="flags/cocos-island.svg" value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                <option data-kt-flag="flags/colombia.svg" value="Colombia">Colombia</option>
                                <option data-kt-flag="flags/comoros.svg" value="Comoros">Comoros</option>
                                <option data-kt-flag="flags/cook-islands.svg" value="Cook Islands">Cook Islands</option>
                                <option data-kt-flag="flags/costa-rica.svg" value="Costa Rica">Costa Rica</option>
                                <option data-kt-flag="flags/ivory-coast.svg" value="Côte d'Ivoire">Côte d'Ivoire</option>
                                <option data-kt-flag="flags/croatia.svg" value="Croatia">Croatia</option>
                                <option data-kt-flag="flags/cuba.svg" value="Cuba">Cuba</option>
                                <option data-kt-flag="flags/curacao.svg" value="Curaçao">Curaçao</option>
                                <option data-kt-flag="flags/czech-republic.svg" value="Czech Republic">Czech Republic</option>
                                <option data-kt-flag="flags/denmark.svg" value="Denmark">Denmark</option>
                                <option data-kt-flag="flags/djibouti.svg" value="Djibouti">Djibouti</option>
                                <option data-kt-flag="flags/dominica.svg" value="Dominica">Dominica</option>
                                <option data-kt-flag="flags/dominican-republic.svg" value="Dominican Republic">Dominican Republic</option>
                                <option data-kt-flag="flags/ecuador.svg" value="Ecuador">Ecuador</option>
                                <option data-kt-flag="flags/egypt.svg" value="Egypt">Egypt</option>
                                <option data-kt-flag="flags/el-salvador.svg" value="El Salvador">El Salvador</option>
                                <option data-kt-flag="flags/equatorial-guinea.svg" value="Equatorial Guinea">Equatorial Guinea</option>
                                <option data-kt-flag="flags/eritrea.svg" value="Eritrea">Eritrea</option>
                                <option data-kt-flag="flags/estonia.svg" value="Estonia">Estonia</option>
                                <option data-kt-flag="flags/ethiopia.svg" value="Ethiopia">Ethiopia</option>
                                <option data-kt-flag="flags/falkland-islands.svg" value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                <option data-kt-flag="flags/fiji.svg" value="Fiji">Fiji</option>
                                <option data-kt-flag="flags/finland.svg" value="Finland">Finland</option>
                                <option data-kt-flag="flags/france.svg" value="France">France</option>
                                <option data-kt-flag="flags/french-polynesia.svg" value="French Polynesia">French Polynesia</option>
                                <option data-kt-flag="flags/gabon.svg" value="Gabon">Gabon</option>
                                <option data-kt-flag="flags/gambia.svg" value="Gambia">Gambia</option>
                                <option data-kt-flag="flags/georgia.svg" value="Georgia">Georgia</option>
                                <option data-kt-flag="flags/germany.svg" value="Germany">Germany</option>
                                <option data-kt-flag="flags/ghana.svg" value="Ghana">Ghana</option>
                                <option data-kt-flag="flags/gibraltar.svg" value="Gibraltar">Gibraltar</option>
                                <option data-kt-flag="flags/greece.svg" value="Greece">Greece</option>
                                <option data-kt-flag="flags/greenland.svg" value="Greenland">Greenland</option>
                                <option data-kt-flag="flags/grenada.svg" value="Grenada">Grenada</option>
                                <option data-kt-flag="flags/guam.svg" value="Guam">Guam</option>
                                <option data-kt-flag="flags/guatemala.svg" value="Guatemala">Guatemala</option>
                                <option data-kt-flag="flags/guernsey.svg" value="Guernsey">Guernsey</option>
                                <option data-kt-flag="flags/guinea.svg" value="Guinea">Guinea</option>
                                <option data-kt-flag="flags/guinea-bissau.svg" value="Guinea-Bissau">Guinea-Bissau</option>
                                <option data-kt-flag="flags/haiti.svg" value="Haiti">Haiti</option>
                                <option data-kt-flag="flags/vatican-city.svg" value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                <option data-kt-flag="flags/honduras.svg" value="Honduras">Honduras</option>
                                <option data-kt-flag="flags/hong-kong.svg" value="Hong Kong">Hong Kong</option>
                                <option data-kt-flag="flags/hungary.svg" value="Hungary">Hungary</option>
                                <option data-kt-flag="flags/iceland.svg" value="Iceland">Iceland</option>
                                <option data-kt-flag="flags/india.svg" value="India">India</option>
                                <option data-kt-flag="flags/indonesia.svg" value="Indonesia">Indonesia</option>
                                <option data-kt-flag="flags/iran.svg" value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                <option data-kt-flag="flags/iraq.svg" value="Iraq">Iraq</option>
                                <option data-kt-flag="flags/ireland.svg" value="Ireland">Ireland</option>
                                <option data-kt-flag="flags/isle-of-man.svg" value="Isle of Man">Isle of Man</option>
                                <option data-kt-flag="flags/italy.svg" value="Italy">Italy</option>
                                <option data-kt-flag="flags/jamaica.svg" value="Jamaica">Jamaica</option>
                                <option data-kt-flag="flags/japan.svg" value="Japan">Japan</option>
                                <option data-kt-flag="flags/jersey.svg" value="Jersey">Jersey</option>
                                <option data-kt-flag="flags/jordan.svg" value="Jordan">Jordan</option>
                                <option data-kt-flag="flags/kazakhstan.svg" value="Kazakhstan">Kazakhstan</option>
                                <option data-kt-flag="flags/kenya.svg" value="Kenya">Kenya</option>
                                <option data-kt-flag="flags/kiribati.svg" value="Kiribati">Kiribati</option>
                                <option data-kt-flag="flags/north-korea.svg" value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                <option data-kt-flag="flags/kuwait.svg" value="Kuwait">Kuwait</option>
                                <option data-kt-flag="flags/kyrgyzstan.svg" value="Kyrgyzstan">Kyrgyzstan</option>
                                <option data-kt-flag="flags/laos.svg" value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                <option data-kt-flag="flags/latvia.svg" value="Latvia">Latvia</option>
                                <option data-kt-flag="flags/lebanon.svg" value="Lebanon">Lebanon</option>
                                <option data-kt-flag="flags/lesotho.svg" value="Lesotho">Lesotho</option>
                                <option data-kt-flag="flags/liberia.svg" value="Liberia">Liberia</option>
                                <option data-kt-flag="flags/libya.svg" value="Libya">Libya</option>
                                <option data-kt-flag="flags/liechtenstein.svg" value="Liechtenstein">Liechtenstein</option>
                                <option data-kt-flag="flags/lithuania.svg" value="Lithuania">Lithuania</option>
                                <option data-kt-flag="flags/luxembourg.svg" value="Luxembourg">Luxembourg</option>
                                <option data-kt-flag="flags/macao.svg" value="Macao">Macao</option>
                                <option data-kt-flag="flags/madagascar.svg" value="Madagascar">Madagascar</option>
                                <option data-kt-flag="flags/malawi.svg" value="Malawi">Malawi</option>
                                <option data-kt-flag="flags/malaysia.svg" value="Malaysia">Malaysia</option>
                                <option data-kt-flag="flags/maldives.svg" value="Maldives">Maldives</option>
                                <option data-kt-flag="flags/mali.svg" value="Mali">Mali</option>
                                <option data-kt-flag="flags/malta.svg" value="Malta">Malta</option>
                                <option data-kt-flag="flags/marshall-island.svg" value="Marshall Islands">Marshall Islands</option>
                                <option data-kt-flag="flags/martinique.svg" value="Martinique">Martinique</option>
                                <option data-kt-flag="flags/mauritania.svg" value="Mauritania">Mauritania</option>
                                <option data-kt-flag="flags/mauritius.svg" value="Mauritius">Mauritius</option>
                                <option data-kt-flag="flags/mexico.svg" value="Mexico">Mexico</option>
                                <option data-kt-flag="flags/micronesia.svg" value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                <option data-kt-flag="flags/moldova.svg" value="Moldova, Republic of">Moldova, Republic of</option>
                                <option data-kt-flag="flags/monaco.svg" value="Monaco">Monaco</option>
                                <option data-kt-flag="flags/mongolia.svg" value="Mongolia">Mongolia</option>
                                <option data-kt-flag="flags/montenegro.svg" value="Montenegro">Montenegro</option>
                                <option data-kt-flag="flags/montserrat.svg" value="Montserrat">Montserrat</option>
                                <option data-kt-flag="flags/morocco.svg" value="Morocco">Morocco</option>
                                <option data-kt-flag="flags/mozambique.svg" value="Mozambique">Mozambique</option>
                                <option data-kt-flag="flags/myanmar.svg" value="Myanmar">Myanmar</option>
                                <option data-kt-flag="flags/namibia.svg" value="Namibia">Namibia</option>
                                <option data-kt-flag="flags/nauru.svg" value="Nauru">Nauru</option>
                                <option data-kt-flag="flags/nepal.svg" value="Nepal">Nepal</option>
                                <option data-kt-flag="flags/netherlands.svg" value="Netherlands">Netherlands</option>
                                <option data-kt-flag="flags/new-zealand.svg" value="New">New Zealand</option>
                                <option data-kt-flag="flags/nicaragua.svg" value="Nicaragua">Nicaragua</option>
                                <option data-kt-flag="flags/niger.svg" value="Niger">Niger</option>
                                <option data-kt-flag="flags/nigeria.svg" value="Nigeria">Nigeria</option>
                                <option data-kt-flag="flags/niue.svg" value="Niue">Niue</option>
                                <option data-kt-flag="flags/norfolk-island.svg" value="Norfolk Island">Norfolk Island</option>
                                <option data-kt-flag="flags/northern-mariana-islands.svg" value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option data-kt-flag="flags/norway.svg" value="Norway">Norway</option>
                                <option data-kt-flag="flags/oman.svg" value="Oman">Oman</option>
                                <option data-kt-flag="flags/pakistan.svg" value="Pakistan">Pakistan</option>
                                <option data-kt-flag="flags/palau.svg" value="Palau">Palau</option>
                                <option data-kt-flag="flags/palestine.svg" value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                <option data-kt-flag="flags/panama.svg" value="Panama">Panama</option>
                                <option data-kt-flag="flags/papua-new-guinea.svg" value="Papua New Guinea">Papua New Guinea</option>
                                <option data-kt-flag="flags/paraguay.svg" value="Paraguay">Paraguay</option>
                                <option data-kt-flag="flags/peru.svg" value="Peru">Peru</option>
                                <option data-kt-flag="flags/philippines.svg" value="Philippines">Philippines</option>
                                <option data-kt-flag="flags/poland.svg" value="Poland">Poland</option>
                                <option data-kt-flag="flags/portugal.svg" value="Portugal">Portugal</option>
                                <option data-kt-flag="flags/puerto-rico.svg" value="Puerto">Puerto Rico</option>
                                <option data-kt-flag="flags/qatar.svg" value="Qatar">Qatar</option>
                                <option data-kt-flag="flags/romania.svg" value="Romania">Romania</option>
                                <option data-kt-flag="flags/russia.svg" value="Russian Federation">Russian Federation</option>
                                <option data-kt-flag="flags/rwanda.svg" value="Rwanda">Rwanda</option>
                                <option data-kt-flag="flags/st-barts.svg" value="Saint Barthélemy">Saint Barthélemy</option>
                                <option data-kt-flag="flags/saint-kitts-and-nevis.svg" value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option data-kt-flag="flags/st-lucia.svg" value="Saint Lucia">Saint Lucia</option>
                                <option data-kt-flag="flags/sint-maarten.svg" value="Saint Martin (French part)">Saint Martin (French part)</option>
                                <option data-kt-flag="flags/st-vincent-and-the-grenadines.svg" value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                <option data-kt-flag="flags/samoa.svg" value="Samoa">Samoa</option>
                                <option data-kt-flag="flags/san-marino.svg" value="San Marino">San Marino</option>
                                <option data-kt-flag="flags/sao-tome-and-prince.svg" value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option data-kt-flag="flags/saudi-arabia.svg" value="Saudi Arabia">Saudi Arabia</option>
                                <option data-kt-flag="flags/senegal.svg" value="Senegal">Senegal</option>
                                <option data-kt-flag="flags/serbia.svg" value="Serbia">Serbia</option>
                                <option data-kt-flag="flags/seychelles.svg" value="Seychelles">Seychelles</option>
                                <option data-kt-flag="flags/sierra-leone.svg" value="Sierra">Sierra Leone</option>
                                <option data-kt-flag="flags/singapore.svg" value="Singapore">Singapore</option>
                                <option data-kt-flag="flags/sint-maarten.svg" value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
                                <option data-kt-flag="flags/slovakia.svg" value="Slovakia">Slovakia</option>
                                <option data-kt-flag="flags/slovenia.svg" value="Slovenia">Slovenia</option>
                                <option data-kt-flag="flags/solomon-islands.svg" value="Solomon Islands">Solomon Islands</option>
                                <option data-kt-flag="flags/somalia.svg" value="Somalia">Somalia</option>
                                <option data-kt-flag="flags/south-africa.svg" value="South Africa">South Africa</option>
                                <option data-kt-flag="flags/south-korea.svg" value="South Korea">South Korea</option>
                                <option data-kt-flag="flags/south-sudan.svg" value="South Sudan">South Sudan</option>
                                <option data-kt-flag="flags/spain.svg" value="Spain">Spain</option>
                                <option data-kt-flag="flags/sri-lanka.svg" value="Sri Lanka">Sri Lanka</option>
                                <option data-kt-flag="flags/sudan.svg" value="Sudan">Sudan</option>
                                <option data-kt-flag="flags/suriname.svg" value="Suriname">Suriname</option>
                                <option data-kt-flag="flags/swaziland.svg" value="Swaziland">Swaziland</option>
                                <option data-kt-flag="flags/sweden.svg" value="Sweden">Sweden</option>
                                <option data-kt-flag="flags/switzerland.svg" value="Switzerland">Switzerland</option>
                                <option data-kt-flag="flags/syria.svg" value="Syrian Arab Republic">Syrian Arab Republic</option>
                                <option data-kt-flag="flags/taiwan.svg" value="Taiwan, Province of China">Taiwan, Province of China</option>
                                <option data-kt-flag="flags/tajikistan.svg" value="Tajikistan">Tajikistan</option>
                                <option data-kt-flag="flags/tanzania.svg" value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                <option data-kt-flag="flags/thailand.svg" value="Thailand">Thailand</option>
                                <option data-kt-flag="flags/togo.svg" value="Togo">Togo</option>
                                <option data-kt-flag="flags/tokelau.svg" value="Tokelau">Tokelau</option>
                                <option data-kt-flag="flags/tonga.svg" value="Tonga">Tonga</option>
                                <option data-kt-flag="flags/trinidad-and-tobago.svg" value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option data-kt-flag="flags/tunisia.svg" value="Tunisia">Tunisia</option>
                                <option data-kt-flag="flags/turkey.svg" value="Turkey">Turkey</option>
                                <option data-kt-flag="flags/turkmenistan.svg" value="Turkmenistan">Turkmenistan</option>
                                <option data-kt-flag="flags/turks-and-caicos.svg" value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option data-kt-flag="flags/tuvalu.svg" value="Tuvalu">Tuvalu</option>
                                <option data-kt-flag="flags/uganda.svg" value="Uganda">Uganda</option>
                                <option data-kt-flag="flags/ukraine.svg" value="Ukraine">Ukraine</option>
                                <option data-kt-flag="flags/united-arab-emirates.svg" value="United Arab Emirates">United Arab Emirates</option>
                                <option data-kt-flag="flags/united-kingdom.svg" value="United Kingdom">United Kingdom</option>
                                <option data-kt-flag="flags/united-states.svg" value="United States">United States</option>
                                <option data-kt-flag="flags/uruguay.svg" value="Uruguay">Uruguay</option>
                                <option data-kt-flag="flags/uzbekistan.svg" value="Uzbekistan">Uzbekistan</option>
                                <option data-kt-flag="flags/vanuatu.svg" value="Vanuatu">Vanuatu</option>
                                <option data-kt-flag="flags/venezuela.svg" value="Venezuela , Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
                                <option data-kt-flag="flags/vietnam.svg" value="Vietnam">Vietnam</option>
                                <option data-kt-flag="flags/virgin-islands.svg" value="Virgin Islands">Virgin Islands</option>
                                <option data-kt-flag="flags/yemen.svg" value="Yemen">Yemen</option>
                                <option data-kt-flag="flags/zambia.svg" value="Zambia">Zambia</option>
                                <option data-kt-flag="flags/zimbabwe.svg" value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Time Zone</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="timezone" aria-label="Select a Timezone" data-control="select2" data-placeholder="Select a timezone.." class="form-select form-select-solid form-select-lg">
                                <option value="">Select a Timezone..</option>
                                <option data-bs-offset="-39600" value="(GMT-11:00) International Date Line West">(GMT-11:00) International Date Line West</option>
                                <option data-bs-offset="-39600" value="(GMT-11:00) Midway Island">(GMT-11:00) Midway Island</option>
                                <option data-bs-offset="-39600" value="(GMT-11:00) Samoa">(GMT-11:00) Samoa</option>
                                <option data-bs-offset="-36000" value="(GMT-10:00) Hawaii">(GMT-10:00) Hawaii</option>
                                <option data-bs-offset="-28800" value="(GMT-08:00) Alaska">(GMT-08:00) Alaska</option>
                                <option data-bs-offset="-25200" value="(GMT-07:00) Pacific Time (US & Canada)">(GMT-07:00) Pacific Time (US & Canada)</option>
                                <option data-bs-offset="-25200" value="(GMT-07:00) Tijuana">(GMT-07:00) Tijuana</option>
                                <option data-bs-offset="-25200" value="(GMT-07:00) Arizona">(GMT-07:00) Arizona</option>
                                <option data-bs-offset="-21600" value="(GMT-06:00) Mountain Time (US & Canada)">(GMT-06:00) Mountain Time (US & Canada)</option>
                                <option data-bs-offset="-21600" value="(GMT-06:00) Chihuahua">(GMT-06:00) Chihuahua</option>
                                <option data-bs-offset="-21600" value="(GMT-06:00) Mazatlan">(GMT-06:00) Mazatlan</option>
                                <option data-bs-offset="-21600" value="(GMT-06:00) Saskatchewan">(GMT-06:00) Saskatchewan</option>
                                <option data-bs-offset="-21600" value="(GMT-06:00) Central America">(GMT-06:00) Central America</option>
                                <option data-bs-offset="-18000" value="(GMT-05:00) Central Time (US & Canada)">(GMT-05:00) Central Time (US & Canada)</option>
                                <option data-bs-offset="-18000" value="(GMT-05:00) Guadalajara">(GMT-05:00) Guadalajara</option>
                                <option data-bs-offset="-18000" value="(GMT-05:00) Mexico City">(GMT-05:00) Mexico City</option>
                                <option data-bs-offset="-18000" value="(GMT-05:00) Monterrey">(GMT-05:00) Monterrey</option>
                                <option data-bs-offset="-18000" value="(GMT-05:00) Bogota">(GMT-05:00) Bogota</option>
                                <option data-bs-offset="-18000" value="(GMT-05:00) Lima">(GMT-05:00) Lima</option>
                                <option data-bs-offset="-18000" value="(GMT-05:00) Quito">(GMT-05:00) Quito</option>
                                <option data-bs-offset="-14400" value="(GMT-04:00) Eastern Time (US & Canada">(GMT-04:00) Eastern Time (US & Canada)</option>
                                <option data-bs-offset="-14400" value="(GMT-04:00) Indiana (East)">(GMT-04:00) Indiana (East)</option>
                                <option data-bs-offset="-14400" value="(GMT-04:00) Caracas">(GMT-04:00) Caracas</option>
                                <option data-bs-offset="-14400" value="(GMT-04:00) La Paz">(GMT-04:00) La Paz</option>
                                <option data-bs-offset="-14400" value="(GMT-04:00) Georgetown">(GMT-04:00) Georgetown</option>
                                <option data-bs-offset="-10800" value="(GMT-03:00) Atlantic Time (Canada)">(GMT-03:00) Atlantic Time (Canada)</option>
                                <option data-bs-offset="-10800" value="(GMT-03:00) Santiago">(GMT-03:00) Santiago</option>
                                <option data-bs-offset="-10800" value="(GMT-03:00) Brasilia">(GMT-03:00) Brasilia</option>
                                <option data-bs-offset="-10800" value="(GMT-03:00) Buenos Aires">(GMT-03:00) Buenos Aires</option>
                                <option data-bs-offset="-9000" value="(GMT-02:30) Newfoundland">(GMT-02:30) Newfoundland</option>
                                <option data-bs-offset="-7200" value="(GMT-02:00) Greenland">(GMT-02:00) Greenland</option>
                                <option data-bs-offset="-7200" value="(GMT-02:00) Mid-Atlantic">(GMT-02:00) Mid-Atlantic</option>
                                <option data-bs-offset="-3600" value="(GMT-01:00) Cape Verde Is.">(GMT-01:00) Cape Verde Is.</option>
                                <option data-bs-offset="0" value="(GMT) Azores</option>">(GMT) Azores</option>
                                <option data-bs-offset="0" value="(GMT) Monrovia</option>">(GMT) Monrovia</option>
                                <option data-bs-offset="0" value="(GMT) UTC</option>">(GMT) UTC</option>
                                <option data-bs-offset="3600" value="(GMT+01:00) Dublin">(GMT+01:00) Dublin</option>
                                <option data-bs-offset="3600" value="(GMT+01:00) Edinburgh">(GMT+01:00) Edinburgh</option>
                                <option data-bs-offset="3600" value="(GMT+01:00) Lisbon">(GMT+01:00) Lisbon</option>
                                <option data-bs-offset="3600" value="(GMT+01:00) London">(GMT+01:00) London</option>
                                <option data-bs-offset="3600" value="(GMT+01:00) Casablanca">(GMT+01:00) Casablanca</option>
                                <option data-bs-offset="3600" value="(GMT+01:00) West Central Africa">(GMT+01:00) West Central Africa</option>
                                <option data-bs-offset="7200" value="(GMT+02:00) Belgrade">(GMT+02:00) Belgrade</option>
                                <option data-bs-offset="7200" value="(GMT+02:00) Bratislava">(GMT+02:00) Bratislava</option>
                                <option data-bs-offset="7200" value="(GMT+02:00) Budapest">(GMT+02:00) Budapest</option>
                                <option data-bs-offset="7200" value="(GMT+02:00) Ljubljana">(GMT+02:00) Ljubljana</option>
                                <option data-bs-offset="7200" value="(GMT+02:00) Prague">(GMT+02:00) Prague</option>
                                <option data-bs-offset="7200" value="(GMT+02:00) Sarajevo">(GMT+02:00) Sarajevo</option>
                                <option data-bs-offset="7200" value="(GMT+02:00) Skopje">(GMT+02:00) Skopje</option>
                                <option data-bs-offset="7200" value="(GMT+02:00) Warsaw">(GMT+02:00) Warsaw</option>
                                <option data-bs-offset="7200" value="(GMT+02:00) Zagreb">(GMT+02:00) Zagreb</option>
                                <option data-bs-offset="7200" value="(GMT+02:00) Brussels">(GMT+02:00) Brussels</option>
                                <option data-bs-offset="7200" value="(GMT+02:00) Copenhagen">(GMT+02:00) Copenhagen</option>
                                <option data-bs-offset="7200" value="(GMT+02:00) Madrid">(GMT+02:00) Madrid</option>
                                <option data-bs-offset="7200" value="(GMT+02:00) Paris">(GMT+02:00) Paris</option>
                                <option data-bs-offset="7200" value="(GMT+02:00) Amsterdam">(GMT+02:00) Amsterdam</option>
                                <option data-bs-offset="7200" value="(GMT+02:00) Berlin">(GMT+02:00) Berlin</option>
                                <option data-bs-offset="7200" value="(GMT+02:00) Bern">(GMT+02:00) Bern</option>
                                <option data-bs-offset="7200" value="(GMT+02:00) Rome">(GMT+02:00) Rome</option>
                                <option data-bs-offset="7200" value="(GMT+02:00) Stockholm">(GMT+02:00) Stockholm</option>
                                <option data-bs-offset="7200" value="(GMT+02:00) Vienna">(GMT+02:00) Vienna</option>
                                <option data-bs-offset="7200" value="(GMT+02:00) Cairo">(GMT+02:00) Cairo</option>
                                <option data-bs-offset="7200" value="(GMT+02:00) Harare">(GMT+02:00) Harare</option>
                                <option data-bs-offset="7200" value="(GMT+02:00) Pretoria">(GMT+02:00) Pretoria</option>
                                <option data-bs-offset="10800" value="(GMT+03:00) Bucharest">(GMT+03:00) Bucharest</option>
                                <option data-bs-offset="10800" value="(GMT+03:00) Helsinki">(GMT+03:00) Helsinki</option>
                                <option data-bs-offset="10800" value="(GMT+03:00) Kiev">(GMT+03:00) Kiev</option>
                                <option data-bs-offset="10800" value="(GMT+03:00) Kyiv">(GMT+03:00) Kyiv</option>
                                <option data-bs-offset="10800" value="(GMT+03:00) Riga">(GMT+03:00) Riga</option>
                                <option data-bs-offset="10800" value="(GMT+03:00) Sofia">(GMT+03:00) Sofia</option>
                                <option data-bs-offset="10800" value="(GMT+03:00) Tallinn">(GMT+03:00) Tallinn</option>
                                <option data-bs-offset="10800" value="(GMT+03:00) Vilnius">(GMT+03:00) Vilnius</option>
                                <option data-bs-offset="10800" value="(GMT+03:00) Athens">(GMT+03:00) Athens</option>
                                <option data-bs-offset="10800" value="(GMT+03:00) Istanbul">(GMT+03:00) Istanbul</option>
                                <option data-bs-offset="10800" value="(GMT+03:00) Minsk">(GMT+03:00) Minsk</option>
                                <option data-bs-offset="10800" value="(GMT+03:00) Jerusalem">(GMT+03:00) Jerusalem</option>
                                <option data-bs-offset="10800" value="(GMT+03:00) Moscow">(GMT+03:00) Moscow</option>
                                <option data-bs-offset="10800" value="(GMT+03:00) St. Petersburg">(GMT+03:00) St. Petersburg</option>
                                <option data-bs-offset="10800" value="(GMT+03:00) Volgograd">(GMT+03:00) Volgograd</option>
                                <option data-bs-offset="10800" value="(GMT+03:00) Kuwait">(GMT+03:00) Kuwait</option>
                                <option data-bs-offset="10800" value="(GMT+03:00) Riyadh">(GMT+03:00) Riyadh</option>
                                <option data-bs-offset="10800" value="(GMT+03:00) Nairobi">(GMT+03:00) Nairobi</option>
                                <option data-bs-offset="10800" value="(GMT+03:00) Baghdad">(GMT+03:00) Baghdad</option>
                                <option data-bs-offset="14400" value="(GMT+04:00) Abu Dhabi">(GMT+04:00) Abu Dhabi</option>
                                <option data-bs-offset="14400" value="(GMT+04:00) Muscat">(GMT+04:00) Muscat</option>
                                <option data-bs-offset="14400" value="(GMT+04:00) Baku">(GMT+04:00) Baku</option>
                                <option data-bs-offset="14400" value="(GMT+04:00) Tbilisi">(GMT+04:00) Tbilisi</option>
                                <option data-bs-offset="14400" value="(GMT+04:00) Yerevan">(GMT+04:00) Yerevan</option>
                                <option data-bs-offset="16200" value="(GMT+04:30) Tehran">(GMT+04:30) Tehran</option>
                                <option data-bs-offset="16200" value="(GMT+04:30) Kabul">(GMT+04:30) Kabul</option>
                                <option data-bs-offset="18000" value="(GMT+05:00) Ekaterinburg">(GMT+05:00) Ekaterinburg</option>
                                <option data-bs-offset="18000" value="(GMT+05:00) Islamabad">(GMT+05:00) Islamabad</option>
                                <option data-bs-offset="18000" value="(GMT+05:00) Karachi">(GMT+05:00) Karachi</option>
                                <option data-bs-offset="18000" value="(GMT+05:00) Tashkent">(GMT+05:00) Tashkent</option>
                                <option data-bs-offset="19800" value="(GMT+05:30) Chennai">(GMT+05:30) Chennai</option>
                                <option data-bs-offset="19800" value="(GMT+05:30) Kolkata">(GMT+05:30) Kolkata</option>
                                <option data-bs-offset="19800" value="(GMT+05:30) Mumbai">(GMT+05:30) Mumbai</option>
                                <option data-bs-offset="19800" value="(GMT+05:30) New Delhi">(GMT+05:30) New Delhi</option>
                                <option data-bs-offset="19800" value="(GMT+05:30) Sri Jayawardenepura">(GMT+05:30) Sri Jayawardenepura</option>
                                <option data-bs-offset="20700" value="(GMT+05:45) Kathmandu">(GMT+05:45) Kathmandu</option>
                                <option data-bs-offset="21600" value="(GMT+06:00) Astana">(GMT+06:00) Astana</option>
                                <option data-bs-offset="21600" value="(GMT+06:00) Dhaka">(GMT+06:00) Dhaka</option>
                                <option data-bs-offset="21600" value="(GMT+06:00) Almaty">(GMT+06:00) Almaty</option>
                                <option data-bs-offset="21600" value="(GMT+06:00) Urumqi">(GMT+06:00) Urumqi</option>
                                <option data-bs-offset="23400" value="(GMT+06:30) Rangoon">(GMT+06:30) Rangoon</option>
                                <option data-bs-offset="25200" value="(GMT+07:00) Novosibirsk">(GMT+07:00) Novosibirsk</option>
                                <option data-bs-offset="25200" value="(GMT+07:00) Bangkok">(GMT+07:00) Bangkok</option>
                                <option data-bs-offset="25200" value="(GMT+07:00) Hanoi">(GMT+07:00) Hanoi</option>
                                <option data-bs-offset="25200" value="(GMT+07:00) Jakarta">(GMT+07:00) Jakarta</option>
                                <option data-bs-offset="25200" value="(GMT+07:00) Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
                                <option data-bs-offset="28800" value="(GMT+08:00) Beijing">(GMT+08:00) Beijing</option>
                                <option data-bs-offset="28800" value="(GMT+08:00) Chongqing">(GMT+08:00) Chongqing</option>
                                <option data-bs-offset="28800" value="(GMT+08:00) Hong Kong">(GMT+08:00) Hong Kong</option>
                                <option data-bs-offset="28800" value="(GMT+08:00) Kuala Lumpur">(GMT+08:00) Kuala Lumpur</option>
                                <option data-bs-offset="28800" value="(GMT+08:00) Singapore">(GMT+08:00) Singapore</option>
                                <option data-bs-offset="28800" value="(GMT+08:00) Taipei">(GMT+08:00) Taipei</option>
                                <option data-bs-offset="28800" value="(GMT+08:00) Perth">(GMT+08:00) Perth</option>
                                <option data-bs-offset="28800" value="(GMT+08:00) Irkutsk">(GMT+08:00) Irkutsk</option>
                                <option data-bs-offset="28800" value="(GMT+08:00) Ulaan Bataar">(GMT+08:00) Ulaan Bataar</option>
                                <option data-bs-offset="32400" value="(GMT+09:00) Seoul">(GMT+09:00) Seoul</option>
                                <option data-bs-offset="32400" value="(GMT+09:00) Osaka">(GMT+09:00) Osaka</option>
                                <option data-bs-offset="32400" value="(GMT+09:00) Sapporo">(GMT+09:00) Sapporo</option>
                                <option data-bs-offset="32400" value="(GMT+09:00) Tokyo">(GMT+09:00) Tokyo</option>
                                <option data-bs-offset="32400" value="(GMT+09:00) Yakutsk">(GMT+09:00) Yakutsk</option>
                                <option data-bs-offset="34200" value="(GMT+09:30) Darwin">(GMT+09:30) Darwin</option>
                                <option data-bs-offset="34200" value="(GMT+09:30) Adelaide">(GMT+09:30) Adelaide</option>
                                <option data-bs-offset="36000" value="(GMT+10:00) Canberra">(GMT+10:00) Canberra</option>
                                <option data-bs-offset="36000" value="(GMT+10:00) Melbourne">(GMT+10:00) Melbourne</option>
                                <option data-bs-offset="36000" value="(GMT+10:00) Sydney">(GMT+10:00) Sydney</option>
                                <option data-bs-offset="36000" value="(GMT+10:00) Brisbane">(GMT+10:00) Brisbane</option>
                                <option data-bs-offset="36000" value="(GMT+10:00) Hobart">(GMT+10:00) Hobart</option>
                                <option data-bs-offset="36000" value="(GMT+10:00) Vladivostok">(GMT+10:00) Vladivostok</option>
                                <option data-bs-offset="36000" value="(GMT+10:00) Guam">(GMT+10:00) Guam</option>
                                <option data-bs-offset="36000" value="(GMT+10:00) Port Moresby">(GMT+10:00) Port Moresby</option>
                                <option data-bs-offset="36000" value="(GMT+10:00) Solomon Is.">(GMT+10:00) Solomon Is.</option>
                                <option data-bs-offset="39600" value="(GMT+11:00) Magadan">(GMT+11:00) Magadan</option>
                                <option data-bs-offset="39600" value="(GMT+11:00) New Caledonia">(GMT+11:00) New Caledonia</option>
                                <option data-bs-offset="43200" value="(GMT+12:00) Fiji">(GMT+12:00) Fiji</option>
                                <option data-bs-offset="43200" value="(GMT+12:00) Kamchatka">(GMT+12:00) Kamchatka</option>
                                <option data-bs-offset="43200" value="(GMT+12:00) Marshall Is.">(GMT+12:00) Marshall Is.</option>
                                <option data-bs-offset="43200" value="(GMT+12:00) Auckland">(GMT+12:00) Auckland</option>
                                <option data-bs-offset="43200" value="(GMT+12:00) Wellington">(GMT+12:00) Wellington</option>
                                <option data-bs-offset="46800" value="(GMT+13:00) Nuku'alofa">(GMT+13:00) Nuku'alofa</option>
                            </select>
                            <div class="form-text">Your Press Releases are scheduled according to the Timezone you selected.</div>

                        </div>

                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Card body-->
                <!--begin::Actions-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <a href="{{route('user.profileView')}}" class="btn btn-light btn-active-light-primary me-2">Discard</a>
{{--                    <input type="submit" class="btn btn-primary" id="edit-user-button" id="savechanges" value="Save Changes"></input>--}}
                    <button class="btn btn-primary" id="edit-user-button" type="submit" value="Ready to Publish">Save Changes</button>

                </div>
                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Basic info-->
@endsection
@section('script')

    <script type="text/javascript">
        $(document).ready(function() {
            $("#savechanges").click(function(e) {
                e.preventDefault();

                swal({
                    title: "Are you sure?",
                    text: "Update User Profile?",
                    icon: "info",
                    buttons: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        var data = $('#edit-user-form').serialize()
                        $.ajax({
                            type: 'POST',
                            url: `{!! route('user.profileViewUpdate') !!}`,
                            data: data
                        }).done(function(data) {
                            swal("User Details Updated Successfully", {
                                icon: "success",
                            });
                            let pageRedirectUrl = `{!! url('profile-view') !!}`;
                            window.location.href = pageRedirectUrl;
                        }).fail(function(data) {
                            // Optionally alert the user of an error here...
                        });

                    }
                });
            })

            $("#overview").click(function () {
                $("#setting_div").addClass('d-none');
                $("#overview_div").removeClass('d-none');
                $("#overview").addClass('active');
                $("#setting").removeClass('active');
            });

            $("#setting").click(function () {
                $("#setting_div").removeClass('d-none');
                $("#overview_div").addClass('d-none');
                $("#overview").removeClass('active');
                $("#setting").addClass('active');
            });
        });
    </script>
@endsection

