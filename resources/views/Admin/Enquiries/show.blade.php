<div class="row align-items-center">
    <div class="col-lg-8 order-last">
        <ul class="list-unstyled mb-4">
            <li class="d-flex align-items-center gap-3 mb-4">
                <i class="ti ti-user text-dark fs-6"></i>
                <h6 class="fs-4 fw-semibold mb-0">{{ $enquiry->full_name ?? 'N/A' }}</h6>
            </li>

            <li class="d-flex align-items-center gap-3 mb-4">
                <i class="ti ti-mail text-dark fs-6"></i>
                <h6 class="fs-4 fw-semibold mb-0">{{ $enquiry->email ?? 'N/A' }}</h6>
            </li>

            <li class="d-flex align-items-center gap-3 mb-4">
                <i class="ti ti-phone text-dark fs-6"></i>
                <h6 class="fs-4 fw-semibold mb-0">{{ $enquiry->mobile ?? 'N/A' }}</h6>
            </li>

            <li class="d-flex align-items-center gap-3 mb-4">
                <i class="ti ti-book text-dark fs-6"></i>
                <h6 class="fs-4 fw-semibold mb-0">{{ $enquiry->subject ?? 'N/A' }}</h6>
            </li>

            <li class="d-flex align-items-center gap-3 mb-4">
                <i class="ti ti-briefcase text-dark fs-6"></i>
                <h6 class="fs-4 fw-semibold mb-0">{{ $enquiry->profession ?? 'N/A' }}</h6>
            </li>

            <li class="d-flex align-items-center gap-3 mb-4">
                <i class="ti ti-clock text-dark fs-6"></i>
                <h6 class="fs-4 fw-semibold mb-0">{{ toIndianDateTime($enquiry->created_at) }}</h6>
            </li>
        </ul>
    </div>
</div>

<div class="row align-items-center">
    <div class="col-12">
        <h5>Message :</h5>
        <p>{{ $enquiry->message ?? 'N/A' }}</p>
    </div>
</div>
