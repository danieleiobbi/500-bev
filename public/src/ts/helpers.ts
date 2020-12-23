export interface Analitics {
    API_URL: string;
    app_url: string;
    brand_id: string;
    ip: string;
    language_code: string;
    market_code: string;
    model: string;
    page: string;
    source: string;
    source_url: string;
}

export interface IntMmedia {
    xSmall: boolean;
    small: boolean;
    medium: boolean;
    large: boolean;
    xLarge: boolean;
    portrait: boolean;
    landscape: boolean;
    width: number;
    height: number;
}

export const matchMedia = (): IntMmedia => {
    const xSmall = window.innerWidth <= 576 || false;
    const small =
        (window.innerWidth > 576 && window.innerWidth <= 767) || false;
    const medium =
        (window.innerWidth > 767 && window.innerWidth <= 992) || false;
    const large =
        (window.innerWidth > 992 && window.innerWidth <= 1200) || false;
    const xLarge = window.innerWidth > 1200 || false;
    const portrait = window.innerHeight > window.innerWidth || false;
    const landscape = window.innerWidth > window.innerHeight || false;
    return {
        xSmall,
        small,
        medium,
        large,
        xLarge,
        portrait,
        landscape,
        width: window.innerWidth,
        height: window.innerHeight,
    };
};

export const env = (): Analitics => {
    return JSON.parse(document.body.dataset.params!);
};

export const scrollToElement = (ele: Element, offset?: number) => {
    // ele.scrollIntoView({ behavior: "smooth" });
    const _offset = offset ? offset : 50;
    const bodyRect = document.body.getBoundingClientRect().top;
    const elementRect = ele.getBoundingClientRect().top;
    const elementPosition = elementRect - bodyRect;
    const offsetPosition = elementPosition - _offset;

    window.scrollTo({
        top: offsetPosition,
        behavior: "smooth",
    });
};

export const toggleClass = (
    element: HTMLElement,
    node: NodeList,
    className?: string
) => {
    const clName = className ? className : "active";
    node.forEach((ele) => {
        const _ele = ele as HTMLElement;
        _ele.classList.remove(clName);
    });
    element.classList.add(clName);
};
