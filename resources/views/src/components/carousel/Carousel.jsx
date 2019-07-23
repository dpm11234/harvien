import React, { Component } from 'react';
import {
    Carousel,
    CarouselItem,
    CarouselControl,
    CarouselIndicators,
    CarouselCaption
} from 'reactstrap';


const items = [
    {
        src: 'https://cdn.mos.cms.futurecdn.net/PdSTCqTbFBxSpNUFNqGaGB.jpg',
        altText: 'Slide 1',
        caption: 'Skill gaming RAM Trident RGB 8GBX2',
        price: '$450'
    },
    {
        src: 'https://static.gamespot.com/uploads/original/1568/15683559/3224017-intel-optane-memory-review%20conclusion.jpg',
        altText: 'Slide 2',
        caption: 'SSD Intel 545s 1TB 2.5 inch SATA III',
        price: '$750'
    },
    {
        src: 'https://www.pcgamesn.com/wp-content/uploads/2018/11/Samsung-860-QVO-NAND.jpg',
        altText: 'Samsung 860 QVO',
        caption: 'Samsung 860 QVO',
        price: '$1000'
    }
];

class CarouselComponet extends Component {

    constructor(props) {
        super(props);
        this.state = { activeIndex: 0 };
        this.next = this.next.bind(this);
        this.previous = this.previous.bind(this);
        this.goToIndex = this.goToIndex.bind(this);
        this.onExiting = this.onExiting.bind(this);
        this.onExited = this.onExited.bind(this);
    }

    onExiting() {
        this.animating = true;
    }

    onExited() {
        this.animating = false;
    }

    next() {
        if (this.animating) return;
        const nextIndex = this.state.activeIndex === items.length - 1 ? 0 : this.state.activeIndex + 1;
        this.setState({ activeIndex: nextIndex });
    }

    previous() {
        if (this.animating) return;
        const nextIndex = this.state.activeIndex === 0 ? items.length - 1 : this.state.activeIndex - 1;
        this.setState({ activeIndex: nextIndex });
    }

    goToIndex(newIndex) {
        if (this.animating) return;
        this.setState({ activeIndex: newIndex });
    }

    render() {
        const { activeIndex } = this.state;

        const slides = items.map((item) => {
            return (
                <CarouselItem
                    onExiting={this.onExiting}
                    onExited={this.onExited}
                    key={item.src}
                >
                    <img src={item.src} alt={item.altText} />
                    <CarouselCaption captionText={item.price} captionHeader={item.caption} />
                </CarouselItem>
            );
        });

        return (
            <div className="">
                <style>
                    {
                        `.carousel-item {           
                  height: 500px;          
                }
                img {
                    width: 100%;
                }`

                    }
                </style>
                <div className="hv-carousel mb-4">
                    <Carousel
                        activeIndex={activeIndex}
                        next={this.next}
                        previous={this.previous}
                    >
                        <CarouselIndicators items={items} activeIndex={activeIndex} onClickHandler={this.goToIndex} />
                        {slides}
                        <CarouselControl direction="prev" directionText="Previous" onClickHandler={this.previous} />
                        <CarouselControl direction="next" directionText="Next" onClickHandler={this.next} />
                    </Carousel>
                </div>

            </div>

        );
    }
}

export default CarouselComponet;
