
            document.addEventListener('alpine:init', () => {
                Alpine.data('photoGalleryApp', () => ({
                currentPhoto: 0,
                photos: [
                      "../11.jpg",
                    "../21.jpg",
                    "../22.jpg",
                    "../29.jpg",
                    "../44.jpg"
                ],
                init() { this.changePhoto(); },
                nextPhoto() {
                    if ( this.hasNext() ) {
                        this.currentPhoto++;
                        this.changePhoto();
                    }
                },
                previousPhoto() {
                    if ( this.hasPrevious() ) {
                        this.currentPhoto--;
                        this.changePhoto();
                    }
                },
                changePhoto() {
                    this.$refs.mainImage.src = this.photos[this.currentPhoto];
                },
                pickPhoto(index) {
                    this.currentPhoto = index;
                    this.changePhoto();
                },
                hasPrevious() {
                    return this.currentPhoto > 0;
                },
                hasNext() {
                    return this.photos.length > (this.currentPhoto + 1);
                }
                }))
            })
