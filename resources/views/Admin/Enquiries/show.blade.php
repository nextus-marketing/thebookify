<div class="row align-items-center">
    <div class="col-lg-8 order-last">
        <ul class="list-unstyled mb-4">
            <li class="d-flex align-items-center gap-3 mb-4">
                <i class="ti ti-user text-dark fs-6"></i>
                <h6 class="fs-5 mb-0">
                    Full Name : <span class="fw-normal">{{ $enquiry->full_name ?? 'N/A' }}</span>
                </h6>
            </li>
            <li class="d-flex align-items-center gap-3 mb-4">
                <i class="ti ti-mail text-dark fs-6"></i>
                <h6 class="fs-5 mb-0">
                    Email : <span class="fw-normal">{{ $enquiry->email ?? 'N/A' }}</span>
                </h6>
            </li>
            <li class="d-flex align-items-center gap-3 mb-4">
                <i class="ti ti-phone text-dark fs-6"></i>
                <h6 class="fs-5 mb-0">
                    Mobile : <span class="fw-normal">{{ $enquiry->mobile ?? 'N/A' }}</span>
                </h6>
            </li>
            <li class="d-flex align-items-center gap-3 mb-4">
                <i class="ti ti-book text-dark fs-6"></i>
                <h6 class="fs-5 mb-0">
                    Subject : <span class="fw-normal">{{ $enquiry->subject ?? 'N/A' }}</span>
                </h6>
            </li>
            <li class="d-flex align-items-center gap-3 mb-4">
                <i class="ti ti-briefcase text-dark fs-6"></i>
                <h6 class="fs-5 mb-0">
                    Profession : <span class="fw-normal">{{ $enquiry->profession ?? 'N/A' }}</span>
                </h6>
            </li>
            <li class="d-flex align-items-center gap-3 mb-4">
                <i class="ti ti-info-circle text-dark fs-6"></i>
                <h6 class="fs-5 mb-0">
                    Enquiry Type : <span class="fw-normal">{{ $enquiry->enquiry_type ?? 'N/A' }}</span>
                </h6>
            </li>
            <li class="d-flex align-items-center gap-3 mb-4">
                <i class="ti ti-clock text-dark fs-6"></i>
                <h6 class="fs-5 mb-0">
                    Created At : <span class="fw-normal">{{ toIndianDateTime($enquiry->created_at) }}</span>
                </h6>
            </li>
        </ul>
    </div>
</div>

<div class="row align-items-center">
    <div class="col-12">
        <h5 class= "mb-2">
            <i class="ti ti-message-dots text-dark fs-6 me-2"></i>Message :
        </h5>
        <p class="mb-0">{{ $enquiry->message ?? 'N/A' }}</p>
    </div>
</div>
